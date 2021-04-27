<html>
  <head>
    <title>リアルタイムチャット</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <script src="./js/app.js"></script>
     
  </head>
  <body>
    <div id="chat">
      <textarea v-model="message"></textarea>
      <br>
      <button type="button" @click="send()">送信</button>

      <div v-for="m in messages">
          <!-- 登録された日時 -->
          <span v-text="m.created_at"></span>
          <!-- メッセージ内容 -->
          <span v-text="m.body"></span>
      </div>
    </div>
    <script>
      new Vue({
          el:'#chat',
          data:{
            message:'',
            messages:[]
          },
          mounted() {
            this.getMessages();
            Echo.channel('chat')
                .listen('MessageCreated', (e) => {
                    this.getMessages(); // 全メッセージを再読込
                })
          },
          methods:{
            send(){
              const url='./send';
              const params = {message: this.message};
              axios.post(url,params)
              .then((response)=>{
                console.debug(response);
                console.log('sended')
              });
            },
            getMessages(){
              const url = './get';
              axios.get(url).then((response)=>{
                console.debug(response.data);
                this.messages = response.data;
              });
            }
          }
      });
    </script>
    
  </body>
  

</html>