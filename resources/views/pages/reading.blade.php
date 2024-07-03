<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Kids Read - Reading Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Montserrat', sans-serif;
    }
  .div {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .div-2 {
    background-color: rgba(214, 247, 240, 1);
    display: flex;
    width: 100%;
    flex-direction: column;
  }
  .div-3 {
    display: -webkit-box;
    width: 100%;
    padding-left: 50px;
  }
  .reading-portal{
    color: rgb(19 84 91);
    font-size: 30px;
    margin-left: 10px;
    display: flex;
    align-items: center;
    margin-left: 30px;
  }
  @media (max-width: 991px) {
    .div-2 {
      max-width: 100%;
    }
  }
  @media (max-width: 991px) {
    .div-3 {
      max-width: 100%;
      padding: 0 20px;
    }
  }
  .img {
    aspect-ratio: 7.69;
    object-fit: auto;
    object-position: center;
    width: 259px;
    fill: #004750;
    max-width: 100%;
    margin: 23px 0 16px 192px;
  }
  @media (max-width: 991px) {
    .img {
      margin-left: 10px;
    }
  }
  .div-4 {
    display: flex;
    margin-top: 30px;
    width: 100%;
    flex-direction: column;
    padding-left: 50px;
  }
  @media (max-width: 991px) {
    .div-4 {
      max-width: 100%;
      padding: 0 20px;
    }
  }
  .div-5 {
  }
  @media (max-width: 991px) {
    .div-5 {
      max-width: 100%;
    }
  }
  .div-6 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-6 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 62%;
    margin-left: 0px;
  }
  @media (max-width: 991px) {
    .column {
      width: 100%;
    }
  }
  .div-7 {
    display: flex;
    flex-grow: 1;
    flex-direction: column;
  }
  @media (max-width: 991px) {
    .div-7 {
      max-width: 100%;
      margin-top: 25px;
    }
  }
  .img-2 {
    aspect-ratio: 25;
    object-fit: auto;
    object-position: center;
    width: 507px;
    fill: #004750;
    max-width: 100%;
  }
  .div-8 {
    display: flex;
    margin-top: 54px;
    padding-right: 80px;
    align-items: start;
    justify-content: space-between;
    gap: 20px;
  }
  @media (max-width: 991px) {
    .div-8 {
      max-width: 100%;
      flex-wrap: wrap;
      padding-right: 20px;
      margin-top: 40px;
    }
  }
  .img-3 {
    aspect-ratio: 6.25;
    object-fit: auto;
    object-position: center;
    width: 111px;
    fill: #004750;
    max-width: 100%;
  }
  .img-4 {
    aspect-ratio: 20;
    object-fit: auto;
    object-position: center;
    width: 459px;
    fill: #5d6b6d;
  }
  @media (max-width: 991px) {
    .img-4 {
      max-width: 100%;
    }
  }
  .div-9 {
    background-color: rgba(155, 199, 189, 1);
    display: flex;
    margin-top: 14px;
    flex-direction: column;
    padding: 23px 18px 44px;
  }
  @media (max-width: 991px) {
    .div-9 {
      max-width: 100%;
      padding-right: 20px;
    }
  }
  .img-5 {
    aspect-ratio: 20;
    object-fit: auto;
    object-position: center;
    width: 728px;
    fill: #004750;
    align-self: center;
  }
  @media (max-width: 991px) {
    .img-5 {
      max-width: 100%;
    }
  }
  .div-10 {
    margin-top: 18px;
  }
  @media (max-width: 991px) {
    .div-10 {
      max-width: 100%;
    }
  }
  .div-11 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-11 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .column-2 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 50%;
    margin-left: 0px;
  }
  @media (max-width: 991px) {
    .column-2 {
      width: 100%;
    }
  }
  .div-12 {
    display: flex;
    flex-grow: 1;
    flex-direction: column;
    align-items: center;
  }
  @media (max-width: 991px) {
    .div-12 {
      margin-top: 40px;
    }
  }
  .img-6 {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 61px;
    fill: #b3dad1;
  }
  .img-7 {
    aspect-ratio: 3.57;
    object-fit: auto;
    object-position: center;
    width: 332px;
    fill: #004750;
    margin-top: 22px;
  }
  .img-8 {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 61px;
    fill: #b3dad1;
    margin-top: 30px;
  }
  .img-9 {
    aspect-ratio: 10;
    object-fit: auto;
    object-position: center;
    width: 332px;
    fill: #004750;
    margin-top: 27px;
  }
  .column-3 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 50%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-3 {
      width: 100%;
    }
  }
  .div-13 {
    display: flex;
    flex-grow: 1;
    flex-direction: column;
    align-items: center;
  }
  @media (max-width: 991px) {
    .div-13 {
      margin-top: 40px;
    }
  }
  .img-10 {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 61px;
    fill: #b3dad1;
  }
  .img-11 {
    aspect-ratio: 8.33;
    object-fit: auto;
    object-position: center;
    width: 289px;
    fill: #004750;
    align-self: start;
    margin-top: 20px;
    max-width: 100%;
  }
  .img-12 {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 61px;
    fill: #b3dad1;
    margin-top: 89px;
  }
  @media (max-width: 991px) {
    .img-12 {
      margin-top: 40px;
    }
  }
  .img-13 {
    aspect-ratio: 10;
    object-fit: auto;
    object-position: center;
    width: 314px;
    fill: #004750;
    margin-top: 27px;
  }
  .column-4 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 38%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-4 {
      width: 100%;
    }
  }
  .img-14 {
    aspect-ratio: 1.14;
    object-fit: auto;
    object-position: center;
    width: 100%;
    fill: #fff;
    stroke-width: 1px;
    stroke: #fff;
  }
  @media (max-width: 991px) {
    .img-14 {
      max-width: 100%;
      margin-top: 27px;
    }
  }
  .div-14 {
    margin-top: 90px;
    width: 784px;
    max-width: 100%;
  }
  @media (max-width: 991px) {
    .div-14 {
      margin-top: 40px;
    }
  }
  .div-15 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-15 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .column-5 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 33%;
    margin-left: 0px;
  }
  @media (max-width: 991px) {
    .column-5 {
      width: 100%;
    }
  }
  .img-15 {
    aspect-ratio: 1.01;
    object-fit: auto;
    object-position: center;
    width: 100%;
    flex-grow: 1;
  }
  @media (max-width: 991px) {
    .img-15 {
      margin-top: 35px;
    }
  }
  .column-6 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 33%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-6 {
      width: 100%;
    }
  }
  .img-16 {
    aspect-ratio: 1.01;
    object-fit: auto;
    object-position: center;
    width: 100%;
    flex-grow: 1;
  }
  @media (max-width: 991px) {
    .img-16 {
      margin-top: 35px;
    }
  }
  .column-7 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 33%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-7 {
      width: 100%;
    }
  }
  .img-17 {
    aspect-ratio: 1.01;
    object-fit: auto;
    object-position: center;
    width: 100%;
    flex-grow: 1;
  }
  @media (max-width: 991px) {
    .img-17 {
      margin-top: 35px;
    }
  }
  .div-16 {
    background-color: rgba(16, 88, 72, 1);
    display: flex;
    margin-top: 47px;
    width: 100%;
    flex-direction: column;
    padding: 43px 80px 26px;
  }
  @media (max-width: 991px) {
    .div-16 {
      max-width: 100%;
      margin-top: 40px;
      padding: 0 20px;
    }
  }
  .img-18 {
    aspect-ratio: 2.17;
    object-fit: auto;
    object-position: center;
    width: 140px;
    max-width: 100%;
  }
  @media (max-width: 991px) {
    .img-18 {
      margin-left: 5px;
    }
  }
  .img-19 {
    aspect-ratio: 5.26;
    object-fit: auto;
    object-position: center;
    width: 291px;
    align-self: end;
    margin-top: 64px;
    max-width: 100%;
  }
  @media (max-width: 991px) {
    .img-19 {
      margin-top: 40px;
    }
  }
</style>

</head>
<body>
<div class="div">
  <div class="div-2">
    <div class="div-3">
      <div><img src="https://www.ourkidsread.org/myimg/header_icon1.png" alt="home" /></div>
      <div class="reading-portal">Reading Portal</div>
    </div>
    <div class="div-4">
      <div class="div-5">
        <div class="div-6">
          <div class="column">
            <div class="div-7">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/0a031f9dbd38f8cbc55d644f13aef8bb81a42ce3a3eaf07c9e0a75b4eee9776e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                class="img-2"
              />
              <div class="div-8">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/13f6c1a66d0a4ac4191585ecec58870e035425d2273c6df4e4f9d2feb4893b44?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                  class="img-3"
                />
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/e35c60db7b8f3d90adb235524d11d667b1d57585cc2f4e3aa3cc19a42d55ebb4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                  class="img-4"
                />
              </div>
              <div class="div-9">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/3d1221dba4f5f1e0f7f636c48c7810973076798e8d84ac7da586457db4bf39a2?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                  class="img-5"
                />
                <div class="div-10">
                  <div class="div-11">
                    <div class="column-2">
                      <div class="div-12">
                        <img
                          loading="lazy"
                          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/b0f3856b2dcdfcf715a404a64fc2db866be99f103b8c4260f3000992a625b4ac?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-6"
                        />
                        <img
                          loading="lazy"
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/a2edb03753d049f9163708b294b061a59c72c4ffc6eb8419b4f7da80e4828153?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-7"
                        />
                        <img
                          loading="lazy"
                          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/6087af0a137b55af9ac9ca74dc3ab281062d20855bc132368c2cb705712d7ece?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-8"
                        />
                        <img
                          loading="lazy"
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e227f951fd445f7e223414ddda0cd21a05cfd0d4a0b1a4674e21f90fa4f1393?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-9"
                        />
                      </div>
                    </div>
                    <div class="column-3">
                      <div class="div-13">
                        <img
                          loading="lazy"
                          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/fd97322958699c587d61dc828b3a6080cefcf3a421e7e0b5e12b49be8796c26f?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-10"
                        />
                        <img
                          loading="lazy"
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8e7baa2e22dbb224a42a81638cc556b57df0ded4093e609951e972b5c5e7b7a?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-11"
                        />
                        <img
                          loading="lazy"
                          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e5277f2b00a8b85979bc6c2920a23b9c349ddbf8824805a586349ba424d22be4?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-12"
                        />
                        <img
                          loading="lazy"
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/5f90c4cdcae925a52fa00b68fb965fb6a44e37945fb34ba949d3d0c6543b933e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
                          class="img-13"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column-4">
            <img
              loading="lazy"
              srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/8e1d4e87d53f55ac56904ca824b45e470415180f5d73b2c05ed6a1828751ad5d?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
              class="img-14"
            />
          </div>
        </div>
      </div>
      <div class="div-14">
        <div class="div-15">
          <div class="column-5">
            <img
              loading="lazy"
              srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/8243a1b672c959d2cb8c476a84289419b00fc3f5903cddbed356a8ad01486a66?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
              class="img-15"
            />
          </div>
          <div class="column-6">
            <img
              loading="lazy"
              srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/3de3071a94282082a085e87cd8b0f4b6bfdbb982730f1146a88575cd70218d98?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
              class="img-16"
            />
          </div>
          <div class="column-7">
            <img
              loading="lazy"
              srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/ef1a281a135e531be9cdc9f9c237043d2eff8059707c914dee02fedf669c0be7?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
              class="img-17"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="div-16">
      <img
        loading="lazy"
        srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/8018a10f9d22cc4c83b8a99cd470a6d7aa5ecec7af2a89cd4f1a1f2489950520?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
        class="img-18"
      />
      <img
        loading="lazy"
        srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/03539a2511e38b299426249ba86dcefc8f73d7ab1c9944c99eba8f3b90c02f9e?apiKey=e6671ed6adc84e23a0b17be5ff9fa294&"
        class="img-19"
      />
    </div>
  </div>
</div>
</body>
