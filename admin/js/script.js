$(document).ready(function(){
    //EDITOR CKEDITOR
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    //REST OF THE CODE
    // $('#selectAllBoxes').click(function (event) {
    //     if(this.checked){
    //         $('.checked = true')
    //     }
    //
    // })

});

