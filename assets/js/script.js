// setTimeout(console.clear(),1000)
// Site Custom Script
function genrate_html(bird_id,temp_count) {
    return `
 <tr>
    <td>
        <input type="text" name="bird_id[]" class="form-control bird-id-val-t bird-id-`+temp_count+`" data-class="bird-id-`+temp_count+`""  required placeholder="Bird ID">
        <span class="error text-danger" style="display:none">DNA ID already available</span>
    </td>
    <td>
        <input type="text" name="specie[]" class="form-control" required placeholder="Bird Specie">
    </td>
    <td>
     <select name="type[]" class="form-control" required>
         <option value="Feather">Feather</option>
         <option value="Blood">Blood</option>
     </select>
    </td>
    <td style="text-align: center;
     padding-top: 10px;">
        <!--- <button class="btn btn-success border-0 add-sample-rows" type="button"><i class="flaticon-plus"></i></button> --->
         <button class="btn btn-danger border-0 delete-sample-row" type="button"><i class="flaticon-cancel"></i></button>
    </td>
 </tr>
 `;
 }
 
 var Quality = [parseInt($("#a_quality_amount").val()),parseInt($("#b_quality_amount").val())];
 
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
     var quality_amount = quality_value($(".select_quality").val());
     var samples_rows = $("#add-samples-box tr").length;
     total = quality_amount*samples_rows;
 
     // });
     var discount = ($("#discount_value").val() != "") ? $("#discount_value").val() : 0 ;
     var extra_amount = ($("#extra_amount_value").val() != "") ? parseInt($("#extra_amount_value").val()) : 0 ;
     discount = get_percentage(discount,total);
 
     $("#discount_amount").html(discount.toFixed(0))
     $('#discount-val').val(discount.toFixed(0));
 
     $("#amount_div").html(total);
     $('#amount-val').val(total);
 
     $( '#extra_amount_div' ).html(extra_amount);
 
     $("#total_amount").html(((total+extra_amount)-discount));
     $('#total-val').val((total+extra_amount)-discount);
 }
 
 function get_percentage(discount_value,total_value) {
     return ( discount_value / 100) * total_value;
 }
 
 // console.log(birdID(8));
 
 $(document).ready(function(){
 
     // console.clear()
     // console.clear();
 
     // Add more sample Rows
     $(document).on('click','.add-sample-rows',function(){
         var row_count = $("#add-samples-box tr").length;
         $("#add-samples-box").append(genrate_html(birdID(8),row_count+1));
         $("#quantity-val").val(row_count);
         calculate_total();
     });
 
    //  Adding Unique Bird ID
    $(".bird-id-val").val(birdID(8));
     
     // Delete Sample Row
     $(document).on('click','.delete-sample-row', function(){
         const element = $(this);
         element.parent().parent().remove();
         var row_count = $("#add-samples-box tr").length;
         $("#quantity-val").val(row_count);
         calculate_total();
     });
 
    //  Show Owner's Details
    $(document).on('click','.show-owner-detail', function(){
       const elem = $(this);
       $('#owner-name-div').html(elem.attr('data-name'));
       $('#owner-phone-div').html(elem.attr('data-phone'));
       $('#dna-quality-div').html(elem.attr('data-quality'));
       $('#quantity-div').html(elem.attr('data-quantity'));
       $('#payment-type-div').html(elem.attr('data-payment_status'));
       $('#total-amount-div').html(elem.attr('data-total'));
       $("#OwnerInfo").modal('show');
    });
    
    //  Calculate Discount
    $("#discount_value").keyup(function(){
        var discount_value = $(this).val();
        if( discount_value != '' && parseInt(discount_value) < 50) {
             calculate_total();
        }
 
        if( parseInt(discount_value) > 49) {
             $(this).css("border-color","red");
        } else {
             $(this).css("border-color","#e9ecef");
        }
    });
    $("#discount_value").change(function(){
         var discount_value = $(this).val();
         if( discount_value != '' && parseInt(discount_value) < 50) {
             calculate_total();
         }
 
         if( parseInt(discount_value) > 49) {
             $(this).css("border-color","red");
         } else {
             $(this).css("border-color","#e9ecef");
         }
     });
    
    // Adding Extra Amount
    $("#extra_amount_value").keyup(function(){
         var discount_value = $( this ).val();
         if( discount_value != '') {
             $( '#extra_amount_div' ).html( discount_value );
             calculate_total();
         } else {
             $( '#extra_amount_div' ).html(0);
         }
     });
     $("#extra_amount_value").change(function(){
         var discount_value = $( this ).val();
         if( discount_value != '') {
             $( '#extra_amount_div' ).html( discount_value );
             calculate_total();
         } else {
             $( '#extra_amount_div' ).html(0);
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
 
    // Validate Phone Number
    $("#phone-number-value").keyup(function(event){
     var key = event.charCode || event.keyCode;
     // console.log(event);
     event.preventDefault();
     if (key == 32) {
         var phonevalue = $("#phone-number-value").val();
         $("#phone-number-value").val(phonevalue.slice(0, -1));
     } else {
         var phone_number_value = $(this).val();
         phone_regex = /\d{11}/
         if(!phone_regex.test(phone_number_value)){
              $(this).css("border-color","red");
              $("#submit-button").prop("disabled",true);
         } else {
              $(this).css("border-color","#e9ecef");
              $("#submit-button").prop("disabled",false);
         }
     }
    });
    $("#phone-number-value").change(function(event){
     var key = event.charCode || event.keyCode;
     // console.log(event);
     event.preventDefault();
     if (key == 32) {
         var phonevalue = $("#phone-number-value").val();
         $("#phone-number-value").val(phonevalue.slice(0, -1));
     } else {
         var phone_number_value = $(this).val();
         phone_regex = /\d{11}/
         if(!phone_regex.test(phone_number_value)){
              $(this).css("border-color","red");
              $("#submit-button").prop("disabled",true);
         } else {
              $(this).css("border-color","#e9ecef");
              $("#submit-button").prop("disabled",false);
         }
     }
    });
    
    // Pay Cash
    $('.pay-cash').click(function() {
        var owner_id_for_cash = $(this).attr('data-ownerID');
        var owner_cash_amount = $(this).attr('data-cashAmount');
        swal({
             title: "Are you sure?",
             text: "You received cash?",
             icon: "warning",
             buttons: ["NO", "Yes!"],
             dangerMode: true,
         })
         .then((willDelete) => {
             if (willDelete) {
                 window.location.href = 'index.php?page=credit_detail&owner_id='+owner_id_for_cash+'';
             }
       });
    });
 
    $(document).on('change','.bird-id-val-t',function(event) {
        $('.bird-id-val-t').css("border-color","#e9ecef").siblings('.error').hide();
        var sample_count = $('.bird-id-val-t').length;
        var sample_data = {
            phone : $("#phone-number-value").val(),
            data:[]
         };
        var i = 0;
        $('.bird-id-val-t').each(function(){
            var new_value = $(this).val();
            new_value = new_value.replace(" ","-");
            $(this).val(new_value);
            var temp_classname = $(this).attr("data-class");
            var temp_data = {
                 bird_id : new_value,
                 class : '.'+temp_classname
             }
             sample_data['data'].push(temp_data);
        });
        $.ajax({
             method: 'POST',
             url: 'resources/ajax/validate_birdID.php',
             data : sample_data,
             success: function(data){
                 data = JSON.parse(data);
                 var data_count = data.length;
                 for (var i=0; i<data_count; i++) {
                     $(data[i].class_name).css("border-color","red").siblings('.error').show();
                 }
             },
             error: function(xhr, desc, err){
                 console.log(err);
             }
         });
     //    console.log(sample_data);
    });

    // Change BirdID
    $(document).on('keyup','.bird-id-val-t',function(event) {
     var key = event.charCode || event.keyCode;
     event.preventDefault();
     if (key == 32) {
         var birdidvalue = $(this).val();
        //  console.log(birdidvalue)
         $(this).val(birdidvalue.slice(0, -1)+"-");
     }
    });
 
 });