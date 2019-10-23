$(window).scroll(function(){
    if($(this).scrollTop()> 800){
        
        $('#butTop').show();
    }
   else{
        
        $('#butTop').hide();
    }
});

$('#butTop').click(function(){
   $('html,body').animate({scrollTop : 0}, 800);
   return false;
});

var langLV = {
    errorTitle: 'Form submission failed!',
    requiredFields: 'Tu neesi aizpildījis visus nepieciešamos laukus',
    badTime: 'You have not given a correct time',
    badEmail: 'Nav uzrakstīta pareiza e-pasta adrese',
    badTelephone: 'You have not given a correct phone number',
    badSecurityAnswer: 'You have not given a correct answer to the security question',
    badDate: 'You have not given a correct date',
    lengthBadStart: 'Ievadītajam skaitim ir jābūt starp ',
    lengthBadEnd: ' zīmes',
    lengthTooLongStart: 'Ievadīatais zīmju skaits ir lielāks kā ',
    lengthTooShortStart: 'Ievadītais zīmju skaits ir mazāks kā ',
    notConfirmed: 'Input values could not be confirmed',
    badDomain: 'Incorrect domain value',
    badUrl: 'The input value is not a correct URL',
    badCustomVal: 'The input value is incorrect',
    andSpaces: ' and spaces ',
    badInt: 'The input value was not a correct number',
    badSecurityNumber: 'Your social security number was incorrect',
    badUKVatAnswer: 'Incorrect UK VAT Number',
    badStrength: 'The password isn\'t strong enough',
    badNumberOfSelectedOptionsStart: 'You have to choose at least ',
    badNumberOfSelectedOptionsEnd: ' answers',
    badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
    badAlphaNumericExtra: ' and ',
    wrongFileSize: 'The file you are trying to upload is too large (max %s)',
    wrongFileType: 'Only files of type %s is allowed',
    groupCheckedRangeStart: 'Please choose between ',
    groupCheckedTooFewStart: 'Please choose at least ',
    groupCheckedTooManyStart: 'Please choose a maximum of ',
    groupCheckedEnd: ' item(s)',
    badCreditCard: 'The credit card number is not correct',
    badCVV: 'The CVV number was not correct',
    wrongFileDim : 'Incorrect image dimensions,',
    imageTooTall : 'the image can not be taller than',
    imageTooWide : 'the image can not be wider than',
    imageTooSmall : 'the image was too small',
    min : 'min',
    max : 'max',
    imageRatioNotAccepted : 'Image ratio is not accepted'
};


