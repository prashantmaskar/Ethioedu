$(document).ready(function() {

    $('#advertise').bootstrapValidator({
        fields: {
            name:{
                 validators:{
                    notEmpty:{
                        message:'Name required'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The Name can consist of alphabetical characters and spaces only'
                    }
                }
            },
        
            email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is not a valid email adddress!!'
                    }
                }
            },
			contact: {
                validators: {
                    digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }
                }
            },
            
            catagory: {
                validators: {
                    notEmpty: {
                        message: ' please select catagory!!!..'
                           
                    }
                }
            },
             addposition: {
                validators: {
                    notEmpty: {
                        message: ' please select position!!!..'
                           
                    }
                }
            },
             paymentmethod: {
                validators: {
                    notEmpty: {
                        message: ' please select payment method!!!..'
                           
                    }
                }
            },
			subject: {
                validators: {
                    notEmpty: {
                        message: ' please enter subject!!!..'
                    }
                }
            },
			fileformat:{
            validators:{
                notEmpty:{
                    message:'please select an image'
                },
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },
             
             
             
              message:{
                validators:{
                    notEmpty:{
                        message:  ' please enter message  !!!'
                    },
                    stringLength:{
                        message:'post tell us must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
          
     
            
          
        }
    });
});