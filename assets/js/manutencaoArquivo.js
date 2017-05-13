
$(document).ready(function () {


            var toolbarOptions = [
                        [{ 'font': [] }],
                        ['bold', 'italic', 'underline'],
                        ['blockquote', 'code-block'],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'align': [] }],
                        ['omega']
                        ];

           var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escreva o documento aqui',
            theme: 'snow'
        });

});