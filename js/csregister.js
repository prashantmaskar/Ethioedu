$(document).ready(function() {

    $('#csregister').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter firtst name!!!..'
                    }
                }
            },
              last_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter last name!!!..'
                    }
                }
            },
              gender: {
                validators: {
                    notEmpty: {
                        message: ' please select gender!!!..'
                    }
                }
            },
 
                  phone_number: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    },
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
              
                  attachphoto: {
                validators: {
                    notEmpty: {
                        message: ' please attach imagee!!!..'
                    }
                }
            },
 
               
                  Bdate: {
                validators: {
                    notEmpty:{ 
                        message:'please enter birthdate!!'

                    }
                  
                }
            },
                  
                  status: {
                validators: {
                    notEmpty:{ 
                        message:'please select choice!!'

                    }
                  
                }
            },
               
                
                  
                  interestedIn: {
                validators: {
                    notEmpty:{ 
                        message:'please select choice!!'

                    }
                  
                }
            },
                  aboutme:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter information about you !!!'
                    },
                    stringLength:{
                        message:'post descreeption must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
              myinterest:{
                validators:{
                    notEmpty:{
                        message:  ' please write your interest !!!'
                    },
                    stringLength:{
                        message:'post descreeption   must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },

               myhobby:{
                validators:{
                    notEmpty:{
                        message:  ' please write your hobby !!!'
                    },
                    stringLength:{
                        message:'post descreeption   must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },


        }
    });
});