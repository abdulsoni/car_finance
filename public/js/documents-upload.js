
/* Photo Id upload code start */
$('#instructionsFooterButton').click(function(){
  $('#fileInput').click();
      });

  //file type validation
  $("#fileInput").change(function() {
      var file = this.files[0];
      var imagefile = file.type;
      var match= ["image/jpeg","image/png","image/jpg"];
      if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
          /*alert('Please select a valid image file (JPEG/JPG/PNG).');*/
          swal("Error", "Please select a valid image file (JPEG/JPG/PNG)", "error");
          $("#instructionsFooterButton").val('');
          return false;
      }
      else{
        $('#form-submit').click();
      }

  });
/* Photo Id upload code end */


/* Selfie upload code start */
$('#upload_selfie_btn').click(function(){
  $('#upload_selfie').click();
});

  //file type validation
  $("#upload_selfie").change(function() {
      var file = this.files[0];
      var imagefile = file.type;
      var match= ["image/jpeg","image/png","image/jpg"];
      if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
          /*alert('Please select a valid image file (JPEG/JPG/PNG).');*/
          swal("Error", "Please select a valid image file (JPEG/JPG/PNG)", "error");
          $("#upload_selfie_btn").val('');
          return false;
      }
      else{
        $('#submit_selfie').click();
      }

  });

/* Selfie upload code end */