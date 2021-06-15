
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
  <style>
    :root {
      --ion-safe-area-top: 20px;
      --ion-safe-area-bottom: 22px;
    }

  </style>
  <script type="module">
    import { menuController } from 'https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/index.esm.js';
    window.menuController = menuController;
    import { toastController } from 'https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/index.esm.js';
    window.toastController = toastController;
  </script>
</head>

<body>
  <ion-app>
    <ion-menu side="start" content-id="main-content">
     <!--  <ion-header>
        <ion-toolbar translucent>
          <ion-title>Menu</ion-title>
        </ion-toolbar>
      </ion-header> -->
      <ion-content>
          <div class="nenu-header-bg"></div>
          <div class="header-content">
            <img src="assets/images/asim.jpeg">
            <ion-label>
              <h2>Asim Das</h2>
              <p>JSID007155</p>
            </ion-label>
          </div>
          <div class="action-button">
            <ion-button class="red-button">
              <ion-icon slot="start" name="add"></ion-icon> Register
            </ion-button>
            <ion-button class="blue-button">
              <ion-icon slot="start" name="add"></ion-icon> Login
            </ion-button>
          </div>

          <ion-list lines="none" class="menu-items">
            <ion-item>
              <ion-icon name="mail" slot="start"></ion-icon>
              <ion-label>Inbox</ion-label>
            </ion-item>
            <ion-item>
              <ion-icon name="paper-plane" slot="start"></ion-icon>
              <ion-label>Outbox</ion-label>
            </ion-item>
            <ion-item class="active">
              <ion-icon name="heart" slot="start"></ion-icon>
              <ion-label>Favorites</ion-label>
            </ion-item>
            <ion-item>
              <ion-icon name="archive" slot="start"></ion-icon>
              <ion-label>Archived</ion-label>
            </ion-item>
            <ion-item>
              <ion-icon name="trash" slot="start"></ion-icon>
              <ion-label>Trash</ion-label>
            </ion-item>
            <ion-item>
              <ion-icon name="warning" slot="start"></ion-icon>
              <ion-label>Spam</ion-label>
            </ion-item>
          </ion-list>


      </ion-content>
    </ion-menu>

    <div class="ion-page" id="main-content">
      <ion-header>
        <ion-toolbar>
          <ion-buttons slot="start">
            <ion-menu-button></ion-menu-button>
          </ion-buttons>
          <ion-title>Login</ion-title>
        </ion-toolbar>
      </ion-header>
      <ion-content class="ion-padding">

        <ion-list lines="full" class="ion-no-margin">
          <ion-item>
            <ion-label position="floating">Email Id / Primary Mobile Number</ion-label>
            <ion-input type="email" name="email" id="email"></ion-input>
          </ion-item>
          <ion-item>
            <ion-label position="floating">Password</ion-label>
            <ion-input type="password" name="password" id="password"></ion-input>
          </ion-item>
        </ion-list>

        <ion-button expand="block" onclick="login()">Login</ion-button>
      </ion-content>
    </div>
  </ion-app>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

    async function login() {
      // await menuController.open();
      var email= $("#email").val();
      var password= $("#password").val();

      if(email==''){
        var message = 'Provide your email or mobile number';
        handleButtonClick(message);
      }else if(password==''){
        var message = 'Provide your password';
        handleButtonClick(message);
      }else{

        alert('success')

      }

      
    }



    async function handleButtonClick(message) {
      const toast = await toastController.create({
        color: 'danger',
        duration: 2000,
        message: message,
        showCloseButton: true
      });

      await toast.present();
    }
  </script>
</body>

<style type="text/css">
  .nenu-header-bg{
    height: 180px;
    width: 350px;
    background:#7590d6;
    background: linear-gradient(90deg, #7590d6 0%, #4d71d7 100%);
    box-shadow: 0px 1px 10px rgba(98, 140, 255, 0.5);
    transform: rotate(-15deg);
    border-radius: 10px 10px 10px 50px;
    margin-left: -18px;
    margin-top: -50px;
    margin-bottom: 60px;  
  }
  .header-content{
    position: absolute;
    top: 30px;
    left: 15px;
    display: flex;
    align-items: center;  
  }

 .header-content img{
      width: 85px;
      height:85px;
      border-radius: 50%;
      border: 7px solid #5e7ccc; 
      margin-right: 14px;
    }
  .header-content h2{
      color: #fff;
      font-weight: 400;
    }
  .header-content p{
    font-size: 12px;
      color: #fff;
      font-weight: 100;
      letter-spacing: 0.4px;
  }
  .action-button{
    display:flex;
    justify-content: center;
    margin-bottom: 20px;  
  }

  /*.action-button ion-button{
    text-transform: capitalize;
    font-weight: 300;
    background: #628cff;
    border-radius: 7px;
    box-shadow: none; 
  }*/
  .action-button ion-icon{
    margin-right: 1px;
  }
  .active{
    border-left: 5px solid;
    color: #628cff;
    /*padding-left: 15px;*/
  }
  .active ion-icon{
    color: #628cff;
  }
  .red-button{
    --background: #ff0c39;
    text-transform: capitalize;
    font-weight: 300;
    border-radius: 7px;
    box-shadow: none; 
  }
  .blue-button{
    text-transform: capitalize;
    font-weight: 300;
    background: #628cff;
    border-radius: 7px;
    box-shadow: none; 
  }

</style>

</html>