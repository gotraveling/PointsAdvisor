<template>
    <div class="container-fluid general imageAdmin">
        <div class="row" v-if="focus == 'list'">
            <div class="col-12 head">
                <table>
                    <tr>
                        <td class="title">Images</td>
                        <td class="options">
                            <md-button class="md-raised md-primary" @click="add()">Add</md-button>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- Main Content -->
            <div :class="[select_mode?'col-sm-12':'col-sm-8']">
                <div class="row main">
                        <div :class="['col-sm-3', 'imageList']" v-bind:key="i.id" v-for="i in images">
                            <div class="image"><a href="javascript:void(0);" @click="selectImg(i)"><img :class="['img-responsive', selectedImg.id==i.id?'selected':'']" :alt="i.title" :src="getImgPath(i.path)" /></a></div>
                            <div>{{i.title}}</div>
                        </div>
                </div>
            </div>

            <!-- Side Menu -->
            <div class="col-sm-4" v-if="!select_mode">
                <div class="settings">
                    <div class="title">Details</div>
                    <div v-if="selectedImg.id"><a href="javascript:void(0);" @click="previewPopup = true"><img :class="['img-responsive']" :alt="selectedImg.title" :src="getImgPath(selectedImg.path)" /></a></div>
                    <md-dialog-alert
                        :md-active.sync="previewPopup"
                        :md-title="selectedImg.title"
                        :md-content="getPreviewContent()" />
                        
                    <md-field>
                      <label>File Name</label>
                      <md-input v-model="info_filename"></md-input>
                    </md-field>
                    
                    <md-field>
                      <label>Title</label>
                      <md-input v-model="info_title"></md-input>
                    </md-field>
                    
                    <md-field>
                      <label>Description</label>
                      <md-input v-model="info_description"></md-input>
                    </md-field>
                    
                    <md-field>
                        <label>Path</label>
                        <md-input v-model="info_path" disabled></md-input>
                    </md-field>
                    <md-button class="md-raised md-primary" @click="save()">Save</md-button>
                    <md-button class="md-raised md-primary" @click="del()">Delete</md-button>
                </div>
            </div>
        </div>
        
        <div class="row" v-if="focus == 'add'">

            <div class="col-12 head">
                <table>
                    <tr>
                        <td class="title">Images</td>
                        <td class="options">
                                <md-button class="md-icon-button md-raised" @click="back()">
                                    <
                                </md-button>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="col-sm-12 text-center">
                <div><file-input></file-input></div>       
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
axios.defaults.headers.common['X-CSRF-Token'] = jQuery('meta[name="csrf-token"]').attr('content');

const API_BASE_URL = '/admin_api';
const URL_BASE_URL = '/img/uploads';

Vue.component('file-input', {
  template: '<input id="input-id" type="file" class="file" multiple="true" data-preview-file-type="text" >',
  mounted: function() {
    jQuery.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') }
    });
    jQuery(this.$el).fileinput({uploadUrl: API_BASE_URL + "/image_upload", autoOrientImage: false});
  },
  beforeDestroy: function() {
    jQuery(this.$el).fileinput('destroy');
  }
});

export default {
    props: ['select_mode'],
    data() {
        return {
            focus:'list',
            hasImage: false,
            image: null,
            images:[],
            selectedImg: {},
            info_title: "", 
            info_description: "",
            info_path: "",
            info_filename: "",
            previewPopup: false
        }
    },
    created () {
        // initialize with defaults
        axios.get(API_BASE_URL + '/images')
        .then((response) => {
            this.images = response.data;
        });
    },
    methods: {
        getImgPath(path){
            return URL_BASE_URL + '/' + path;
        },
        resetSelectImg() {
            this.selectedImg = {};
            this.info_title = this.info_description = this.info_path = this.info_filename = "";
        },
        selectImg(img){
            this.selectedImg = img;
            this.info_title = img.title;
            this.info_description = img.description;
            this.info_path = this.getImgPath(img.path);
            this.info_filename = img.path.split("/").pop();

            if(this.select_mode){
                this.$emit('select_url', this.getImgPath(this.selectedImg.path));
            }
        },
        getPreviewContent() {
            return "<img src='" + this.getImgPath(this.selectedImg.path) + "' />";
        },
        save() {
            axios.post(API_BASE_URL + '/image_update', {id: this.selectedImg.id, filename: this.info_filename, title: this.info_title, description: this.info_description})
            .then((response_update) => { 
                if(!response_update.data.result) window.alert('Failed. ' + response_update.data.msg);
                axios.get(API_BASE_URL + '/images')
                .then((response) => {
                    this.images = response.data;
                    this.resetSelectImg();
                });
            });
        },
        back() {
            this.focus = 'list';
            axios.get(API_BASE_URL + '/images')
            .then((response) => {
                this.images = response.data;
            });
        },
        del() {
            if(window.confirm("Are you sure?")){
                axios.post(API_BASE_URL + '/image_delete', {id: this.selectedImg.id})
                .then(() => {
                    axios.get(API_BASE_URL + '/images')
                    .then((response) => {
                        this.images = response.data;
                        this.resetSelectImg();
                    });
                });
            }
        },
        add() {
            this.focus = 'add';
        }
    }
}
</script>