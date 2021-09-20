// Site Custom Script
function genrate_html(bird_id) {
   return `
<tr>
   <td>
       <input type="text" name="bird_id[]" class="form-control bird-id-val" required placeholder="Bird ID">
   </td>
   <td>
       <input type="text" name="specie[]" class="form-control" required placeholder="Bird Specie">
   </td>
   <td>
       <input type="text" name="type[]" class="form-control" required placeholder="Sample Type">
   </td>
   <td>
       <select name="quality[]" class="form-control" required>
           <option value="" hidden>Select Quality</option>
           <option value="A">A</option>
           <option value="B">B</option>
       </select>
   </td>
   <td>
       <button class="btn btn-success border-0" type="button" id="add-sample-rows"><i class="flaticon-plus"></i></button>
       <button class="btn btn-danger border-0" type="button" id="add-sample-rows"><i class="flaticon-garbage"></i></button>
   </td>
</tr>
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