// Site Custom Script
function genrate_html(bird_id) {
   return `
<div class="single-sample-form-div">
   <span class="sample-del delete-sample-row"><i class="flaticon-garbage"></i></span>
   <div class="row">
      <div class="col-md-3">
         <div class="form-group">
            <input type="text" name="bird_id[]" class="form-control" required placeholder="Bird ID" value="`+bird_id+`">
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-group">
            <input type="text" name="specie[]" class="form-control" required placeholder="Bird Specie">
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-group">
            <input type="text" name="type[]" class="form-control" required placeholder="Sample Type">
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-group">
            <select name="quality[]" required class="form-control">
               <option value="" hidden>Select Quality</option>
               <option value="A">A</option>
               <option value="B">B</option>
            </select>
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-group">
            <input type="text" name="amount[]" class="form-control" required placeholder="Amount">
         </div>
      </div>
   </div>
</div>
`;
}

function birdID(length) {
   var result           = '';
   var characters       = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
     result += characters.charAt(Math.floor(Math.random() * 
charactersLength));
  }
  return result;
}

// console.log(birdID(8));

$(document).ready(function(){

    // Add more sample Rows
    $("#add-sample-rows").click(function(){
        $("#add-samples-box").append(genrate_html(birdID(8)));
    });

   //  Adding Unique Bird ID
   $(".bird-id-val").val(birdID(8));
    
    // Delete Sample Row
    $(document).on('click','.delete-sample-row', function(){
        const element = $(this);
        element.parent().remove();
    });

   //  Show Owner's Details
   $(document).on('click','.show-owner-detail', function(){
      const elem = $(this);
      $('#owner-name-div').html(elem.attr('data-name'));
      $('#owner-phone-div').html(elem.attr('data-phone'));
      $("#OwnerInfo").modal('show');
   });

});