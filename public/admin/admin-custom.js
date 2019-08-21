/*
|--------------------------------------------------------------------------
| Admin - image preview 
|--------------------------------------------------------------------------
|
*/
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.profile_banner_preiew').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#admin_img").change(function() {
  readURL(this);
});

/*
|--------------------------------------------------------------------------
| Services - image preview 
|--------------------------------------------------------------------------
|
*/
function readURL1(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.service_img').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#service_img").change(function() {
  readURL1(this);
});

/*
|--------------------------------------------------------------------------
| Testimonial - image preview 
|--------------------------------------------------------------------------
|
*/
function readURL2(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.testimonial_img').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#testimonial_img").change(function() {
  readURL2(this);
});

/*
|--------------------------------------------------------------------------
| Organization Logo - image preview 
|--------------------------------------------------------------------------
|
*/
function readURL3(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.logo_img').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#logo_img").change(function() {
  readURL3(this);
});

/*
|--------------------------------------------------------------------------
| Pages - image preview 
|--------------------------------------------------------------------------
|
*/
function readURL4(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.page_img').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#page_img").change(function() {
  readURL4(this);
});

/*
|--------------------------------------------------------------------------
| Home Page - Report image preview 
|--------------------------------------------------------------------------
|
*/
function readURL5(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.report_img').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#report_img").change(function() {
  readURL5(this);
});

/*
|--------------------------------------------------------------------------
| Home Page - Report image preview 
|--------------------------------------------------------------------------
|
*/
function readURL6(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.site_logo').attr('src', e.target.result);
    
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#site_logo").change(function() {
  readURL6(this);
});