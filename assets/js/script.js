// Site Custom Script
function genrate_html(bird_id) {
   return `
<tr>
   <td>
       <input type="text" name="bird_id[]" class="form-control bird-id-val" required placeholder="Bird ID" value="`+bird_id+`">
   </td>
   <td>
       <input type="text" name="specie[]" class="form-control" required placeholder="Bird Specie">
   </td>
   <td>
       <input type="text" name="type[]" class="form-control" required placeholder="Sample Type">
   </td>
   <td>
       <select name="quality[]" class="form-control select_quality" required>
           <option value="" hidden>Select Quality</option>
           <option value="0">A</option>
           <option value="1">B</option>
       </select>
   </td>
   <td>
       <button class="btn btn-success border-0 add-sample-rows" type="button"><i class="flaticon-plus"></i></button>
        <button class="btn btn-danger border-0 delete-sample-row" type="button"><i class="flaticon-garbage"></i></button>
   </td>
</tr>
`;
}

var Quality = [500,600];

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

function quality_value(index) {
    return Quality[index];
}

function calculate_total(){
    var total = 0;
    $(".select_quality").each(function(){
        var selected_quality = $(this).val();
        var quality_amount = (selected_quality == "") ? 0 : quality_value(selected_quality) ;
        total = total + quality_amount;
    });
    var discount = ($("#discount_value").val() != "") ? $("#discount_value").val() : 0 ;
    discount = get_percentage(discount,total);

    $("#discount_amount").html(discount)
    $('#discount-val').val(discount);

    $("#amount_div").html(total);
    $('#amount-val').val(total);

    $("#total_amount").html((total-discount));
    $('#total-val').val(total-discount);
}

function get_percentage(discount_value,total_value) {
    return ( discount_value / 100) * total_value;
}

// console.log(birdID(8));

$(document).ready(function(){

    // Add more sample Rows
    $(document).on('click','.add-sample-rows',function(){
        $("#add-samples-box").append(genrate_html(birdID(8)));
    });

   //  Adding Unique Bird ID
   $(".bird-id-val").val(birdID(8));
    
    // Delete Sample Row
    $(document).on('click','.delete-sample-row', function(){
        const element = $(this);
        element.parent().parent().remove();
    });

   //  Show Owner's Details
   $(document).on('click','.show-owner-detail', function(){
      const elem = $(this);
      $('#owner-name-div').html(elem.attr('data-name'));
      $('#owner-phone-div').html(elem.attr('data-phone'));
      $("#OwnerInfo").modal('show');
   });
   
   //  Calculate Discount
   $("#discount_value").keyup(function(){
       var discount_value = $(this).val();
       if( discount_value != '' && parseInt(discount_value) < 50) {
            calculate_total();
       }

       console.log(parseInt(discount_value))
       if( parseInt(discount_value) > 49) {
            $(this).css("border-color","red");
       } else {
            $(this).css("border-color","#e9ecef");
       }
   });
   
   // Get Total Amount
   $(document).on('change','.select_quality',function(){
        calculate_total();
   });

   // Add Result
   $('.add-sample-result').click(function(){
        var sample_id = $(this).attr('data-sampleID');
        $('#sample_id').val(sample_id);
        $("#AddResult").modal("show");
   });
});