tinymce.init({
    selector:'#post_content',
    theme: 'modern',
    relative_urls : false,
    remove_script_host : true,
    convert_urls : true,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help'
    ],
    toolbar: 'undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    image_advtab: true,

    external_filemanager_path:"/tpblog/assets/responsive_filemanager/filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "/tpblog/assets/tinymce/plugins/filemanager/plugin.min.js"}
});