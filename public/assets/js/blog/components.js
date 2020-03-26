var componentes = {
  post:(props)=>{
    let comp =
      '<div class="col-md-4">'+
          '<div class="card my-card">'+
              '<div class="view overlay hm-white-slight">'
                  '<img src="'+props.src+'" class="img-fluid" alt="">'+
                  '<a>'+
                      '<div class="mask"></div>'+
                  '</a>'+
              '</div>'+
              '<a class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>'+
              '<div class="card-body">'+
                  '<h4 class="card-title">'+props.title+'</h4>'+
                  '<hr>'+
                  '<p class="card-text">'+props.text+'</p>'+
              '</div>'+
              '<div class="card-data">'
                  '<ul>'+
                      '<li><i class="fa fa-clock-o"></i> '+props.date+'</li>'+
                      '<li><a href="#"><i class="fa fa-comments-o"></i>'+props.comments+'</a></li>'+
                  '</ul>'+
              '</div>'+
          '</div>'+
        '</div>';
    return comp;
  },
  comment:(props)=>{
    let comp =
      '<div class="row">'+
            '<div class="col-sm-2 col-12">'+
                '<img src="'+props.src+'">'+
            '</div>'+
            '<div class="col-sm-10 col-12">'+
                '<a><h5 class="user-name d-flex justify-items-start font-bold">'+props.username+'</h5></a>'+
                '<div class="card-data">'+
                    '<ul class="list-unstyled">'+
                        '<li class="comment-date"><i class="fa fa-clock-o"></i> '+props.date+'</li>'+
                    '</ul>'+
                '</div>'+
                '<p class="comment-text">'+props.text+'</p>'+
            '</div>'+
        '</div>';
    return comp;
  },
  acordion:(props)=>{
    let comp = '<div class="accordion" id="accordion-'+props.index+'" role="tablist" aria-multiselectable="true"></div>';
    return comp;
  }
}
