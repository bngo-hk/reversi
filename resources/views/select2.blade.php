
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css">
</head>
<body>
    <div>
        <select style="width:250px;" class="select2-ajax"></select>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/ja.js"></script>
    <script>
      $(function(){

        $('.select2-ajax').select2({
            ajax:{
              //非同期通信するサーバURL
              url:'/user',
              dataType:'json',
              
              processResults(response){
                //ローカル配列定義
                let options =[];
                //サーバと非同期通信してデータが返ってきたときの処理
                //配列オブジェクト.forEach

                response.forEach((user)=>{
                    //select2用の連想配列を作る
                    options.push({
                      id:user.id,
                      text:user.name
                    });
                });

                return{
                  //select2にサーバからのデータを配列で戻す
                  results:options
                };
              }
            }
            ,
            allowClear: true,
            placeholder: '',
            language: 'ja'
        });
      });
    </script>
  </body>
</html>