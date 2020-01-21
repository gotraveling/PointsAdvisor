<script src="/js/ckeditor.js"></script>
<script>
var bodyCkeEditor;
jQuery('.ckeApp').each(function(i, appItem) {
const ckeApp = new Vue({
    el: appItem,
    data: {
        editor: null,
        bShowDialog: false,
        ckeImgUrl: ""
    },
    mounted: function() {
        var This = this;
        var txt = jQuery(this.$el).find("textarea");
        ClassicEditor.create( txt[0], txt.hasClass('imgOnly')?{ toolbar: ['insertImage'] }:{} )
        .then(editor => {
            if(txt.is("#body")) bodyCkeEditor = editor; 
            This.editor = editor;
            editor.fctrImages = function() {
                var p = new Promise((resolv, reject) => {
                    ClassicEditor.selectImgResolve = resolv;
                }).then((v) => {
                    if(txt.hasClass('imgOnly')) editor.setData( '' );
                    editor.model.change(writer => {
                        const imageElement = writer.createElement('image', {
                            src: v
                        });
                        editor.model.insertContent(imageElement, editor.model.document.selection);
                    });
                });
                This.bShowDialog = true;
            }
            editor.model.document.on( 'change:data', () => {
                txt.val(editor.getData());
            } );
        })        
    },
    methods: {
        sendCkeImgUrl(url) {
            ClassicEditor.selectImgResolve(url);
        },
    }
})
});

function switchBodyEditMode() {
    if(jQuery("#body").css('display') == 'none'){
        jQuery("#body").siblings(".ck-editor").hide();
        jQuery("#body").css('display', 'block');
    }else{
        bodyCkeEditor.setData(jQuery("#body").val());
        jQuery("#body").css('display', 'none');
        jQuery("#body").siblings(".ck-editor").show();
    }
};

if(jQuery('#imgManager').length){
    const imgManagerApp = new Vue({
        el: '#imgManager'
    });
}
</script>
