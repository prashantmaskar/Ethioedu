$(document).ready(function() {

    $('#addschoolform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            choice: {
                validators: {
                    notEmpty: {
                        message: ' please select registration type!!!..'
                    }
                }
            },
            user_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter user_name!!!..'
                    }
                }
            },
            fileformat:{
            validators:{
                notEmpty:{
                    message:'Please select a logo'
                },
                 file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },
             fullname: {
                validators:{
                    notEmpty:{
                        message:'full name required'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
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
            schoolname:{
                    validators:{
                        notEmpty:{
                            message:'please enter school name!!'
                        }
                    }
            },
            choice1: {
                validators: {
                    notEmpty: {
                        message: ' please select  school catagory!!!..'
                           
                    }
                }
            },
             choice2: {
                validators: {
                    notEmpty: {
                        message: ' please select  school university!!!..'
                           
                    }
                }
            },
             choice3: {
                validators: {
                    notEmpty: {
                        message: ' please select  institute!!!..'
                           
                    }
                }
            },
             choice4: {
                validators: {
                    notEmpty: {
                        message: ' please select  other catagory!!!..'
                           
                    }
                }
            },
             phone_number: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    },/*digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }*/
                     regexp:{
                     regexp:/^\+251?([- ]{1})?([0-9]{9})$/,
                           message:'invalid Phone number,!! You should enter country code space 9 digit contact number!!'
                      ,   }
                }
            },
             choice5: {
                validators: {
                    notEmpty: {
                        message: ' please select  school catagory!!!..'
                           
                    }
                }
            },
             choice6:{
                validators:{
                    notEmpty:{
                        message:  ' please enter city!!!'
                    }
                }
             },
              choice7:{
                validators:{
                    notEmpty:{
                        message:  ' please choose region!!!'
                    }
                }
             },
               choice8:{
                validators:{
                    notEmpty:{
                        message:  ' please choose school type!!!'
                    }
                }
             },
             student_population:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter student_population!!!'
                    }
                }
             },
             t_staff:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter amount of teaching staff!!!'
                    },
                     digits:{
                         message:'price invalid'

                            }
                }
             },
             non_teach:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter amount of non_teaching staff!!!'
                    },
                     digits:{
                         message:'price invalid'

                            }
                }
             },
             past_award:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter name of past award !!!'
                    }
                }
             },
             year:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter name of year !!!'
                    },
                    digits:{
                      message:'should be in year format'
                    }
                }
             },
             fee:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter fee !!!'
                    },
                     digits:{
                         message:'price invalid'

                            }
                }
             },
                Admissios_pro:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter Admission Procedures !!!'
                    },
                     stringLength:{
                        message:'post tell us must be less than 200 characters',
                        max:function(value,validator,$field){
                            return 200 - (value.match(/\r/g) || []).length;
                        }
                    }
                  
                    
                }
             },
             Description:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter academic requierement descreeption !!!'
                    },
                      stringLength:{
                        message:'requierement must be less than 200 characters',
                        max:function(value,validator,$field){
                            return 200 - (value.match(/\r/g) || []).length;
                        }
                    }
                   
                    
                }
             },
             scolership:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter scolership!!!'
                    },
                    stringLength:{
                        message:'post  must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
           address:{
                validators:{
                    notEmpty:{
                        message:  ' address required!!!'
                    },
                    stringLength:{
                        message:'address must be less than 60 characters',
                        max:function(value,validator,$field){
                            return 60 - (value.match(/\r/g) || []).length;
                        }
                    }
                    
                }
             },
                   website:{
                validators:{
                    uri:{
                        message:  ' website address is not valid!!!'
                    },
                    notEmpty:{
                         message:'enter web url'
                    }
                }
             },
              tell_us:{
                validators:{
                    notEmpty:{
                        message:  ' please tell us about yourslef  !!!'
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



$(document).ready(function() {

 $('#tokenfield').tokenfield({
  autocomplete:{
     source: ['Computer Study Lab',' Football Pitch ','Science Labs','Swimming Pool','Library','Basket ball court','Football pitch','design and technology lab','tennis court'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
}); 


$(document).ready(function() {

 $('#Program_tokenfield').tokenfield({
  autocomplete:{
    source: ['primary','Nursary','Secondary'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
}); 
