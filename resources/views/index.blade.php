<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Naik Kapal</title>
    <style>
        body{
          
           margin: 0;
           padding: 0;      
        }

        .nav {
            display: flex;
            height: 50px;

        }
        ul {
            display: flex;
            background: transparent;
            margin-top: 10px;
            padding: 100px;
            height: 0px;
            float: left;
        }
        li {
            padding: 20px;
            margin-top: 1px;
            display: inline;
            color: white ;          
            float:left;
        }
        .login {
            position: absolute;
            width: 36px;
            height: 14px;
            left: 1085px;
            top: 33px;

            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 14px;
            /* identical to box height, or 100% */

            letter-spacing: 0.003em;

            /* Ligth */

            color: #F4F4F4;
                    }

  button.signup {
    position: absolute;
    width: 130px;
    height: 40px;
    left: 1160px;
    top: 40px;
    border-radius: 10px;
    font-family:'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 19px;
    letter-spacing: 0.003em;
    background: #8992FA; 
    color: #FFFFFF;
    border: none;

    }

button.signup:hover {
    position: absolute;
    width: 130px;
    height: 40px;
    left: 1160px;
    top: 40px;

    /* Secondary Color */

    background:blue;
    color: white;

    }
       li:hover{
            /* background: #8992FA; */
            padding: 20px;           
            color: blue ;          
            float:left;
        }
        h2{
            position: absolute;
            font-size: 100px;
            width: 400px;
            height: 120px;
            left: 150px;
            top: 190px;
            color: white;
            padding: 0px;
            font-weight: 100px;
            text-align: left;
            margin-left: 100px;

            
        }
        h4 {
            position: absolute;
            width: 520px;
            height: 48px;
            left: 150px;
            top: 350px;color: #D8D8D8;
            margin-left: 10px;
            padding-top: 0px;


        }
        .signup1{
            position: absolute;
            width: 152px;
            height: 59px;
            left: 170px;
            top: 415px;
            
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 14px;
            line-height: 19px;
            background: #8992FA;
            border-radius:10px;
            /* identical to box height  */
            
            letter-spacing: 0.003em;
            
            color:white;"
        }
        .signup1:hover{
            background: blue;
            color: #8992FA;
        }

        .naikkapal {
                position: absolute;
                width: 115px;
                height: 31px;
                left: 140px;
                top: 23px;
                
                font-family: 'K2D';
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 31px;
                
                /* Secondary Color */
                
                color: #8992FA;
        }
        .home {
                position: absolute;
                width: 42px;
                height: 14px;
                left: 540px;
                top: 33px;
                
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 14px;
                line-height: 14px;
                /* identical to box height, or 100% */
                
                letter-spacing: 0.003em;
                
                color: #FFFFFF;
        }
        .destinasi {
                position: absolute;
                width: 76px;
                height: 14px;
                left: 618px;
                top: 33px;
                
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 14px;
                /* identical to box height, or 100% */
                
                letter-spacing: 0.003em;
                
                /* Ligth */
                
                color: #F4F4F4;
        }

        .choose1 {
                position: absolute;
                width: 127px;
                height: 14px;
                left: 730px;
                top: 33px;
                
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 14px;
                /* identical to box height, or 100% */
                
                letter-spacing: 0.003em;
                
                /* Ligth */
                
                color: #F4F4F4;
        }
        .manage {
                position: absolute;
                width: 53px;
                height: 14px;
                left: 856px;
                top: 33px;
                
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 14px;
                /* identical to box height, or 100% */
                
                letter-spacing: 0.003em;
                
                /* Ligth */
                
                color: #F4F4F4;
        }
        .about {
                position: absolute;
                width: 113px;
                height: 14px;
                left: 947px;
                top: 33px;
                
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 14px;
                /* identical to box height, or 100% */
                
                letter-spacing: 0.003em;
                
                /* Ligth */
                
                color: #F4F4F4;
        }
       
 

 .isi {
        position: absolute;
        width: 407px;
        height: 72px;
        left: 150px;
        top: 862px;

        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        /* or 171% */

        text-align: justify;
        letter-spacing: 0.003em;

        /* Medium */

        color: #969696;
      }
      .subjudul {
        position: absolute;
        width: 407px;
        height: 150px;
        left: 150px;
        top: 696px;

        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 36px;
        line-height: 50px;
        /* or 139% */


        /* Dark */

        color: #0B0F18;

      }
      .judul {
        position: absolute;
        width: 253px;
        height: 25px;
        left: 150px;
        top: 659px;

        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */


        /* Tertiary Color */

        color: #FFD31D;
      }

      .wicaksana{
        position: absolute;
        width: 40px;
        height: 40px;
        left: 150px;
        top: 958px;
      }

      .nama{
        position: absolute;
        width: 219px;
        height: 22px;
        left: 206px;
        top: 956px;

        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 22px;
        /* identical to box height */

        text-align: justify;
        letter-spacing: 0.003em;

        /* Dark */

        color: #0B0F18;
      }

      .propesi{
        position: absolute;
        width: 117px;
        height: 19px;
        left: 206px;
        top: 982px;

        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;
        /* identical to box height */

        text-align: justify;
        letter-spacing: 0.003em;

        /* Medium */

        color: #969696;
      }

      .frame4{
        position: absolute;
        width: 290px;
        height: 288px;
        left: 657px;
        top: 659px;

        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 20px;

      }
                    .topi{
                        position: absolute;
                        width: 37px;
                        height: 36px;
                        left: 35px;
                        top: 50px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 36px;
                        line-height: 49px;


                    }

                    .subjudul1{
                        position: absolute;
                        width: 236.04px;
                        height: 33px;
                        left: 17px;
                        top: 118px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 24px;
                        line-height: 33px;
                        /* identical to box height */


                        /* Dark */

                        color: #0B0F18;

                    }
                    .subjudul2{
                        position: absolute;
                        width: 256px;
                        height: 72px;
                        left: 17px;
                        top: 167px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 14px;
                        line-height: 24px;
                        /* or 171% */

                        text-align: justify;
                        letter-spacing: 0.003em;

                /* Medium */

                        color: #969696;
                    }
     .frame5{
        position: absolute;
        width: 290px;
        height: 288px;
        left: 980px;
        top: 815px;

        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 20px;

     }
                    .pohon {
                        position: absolute;
                        width: 35px;
                        height: 36px;
                        left: 35px;
                        top: 50px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 36px;
                        line-height: 49px;

                    }
                    .subjudul3 {
                        position: absolute;
                        width: 236.04px;
                        height: 33px;
                        left: 17px;
                        top: 118px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 24px;
                        line-height: 33px;
                        /* identical to box height */


                        /* Dark */

                        color: #0B0F18;
                    }
                    .subjudul4{
                        position: absolute;
                        width: 256px;
                        height: 72px;
                        left: 17px;
                        top: 167px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 14px;
                        line-height: 24px;
                        /* or 171% */

                        text-align: justify;
                        letter-spacing: 0.003em;

                        /* Medium */

                        color: #969696;

                    }

       .frame6 {
        position: absolute;
        width: 290px;
        height: 288px;
        left: 657px;
        top: 987px;

        background: #FFFFFF;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
       }
                .coin{
                    
                    position: absolute;
                    width: 38px;
                    height: 36px;
                    left: 35px;
                    top: 50px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 36px;
                    line-height: 49px;

                    /* Dark */

                    color: #0B0F18;

                }
                .subjudul5{
                    position: absolute;
                    width: 236.04px;
                    height: 33px;
                    left: 17px;
                    top: 118px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 24px;
                    line-height: 33px;
                    /* identical to box height */


                    /* Dark */

                    color: #0B0F18;
                }
                .subjudul6{
                    position: absolute;
                    width: 256px;
                    height: 72px;
                    left: 17px;
                    top: 167px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 24px;
                    /* or 171% */

                    text-align: justify;
                    letter-spacing: 0.003em;

                    /* Medium */

                    color: #969696;

                }
        .frame7{
            position: absolute;
            width: 122px;
            height: 76px;
            left: 211px;
            top: 1078px;
        }
                .user{
                    position: absolute;
                    width: 122px;
                    height: 49px;
                    left: 11px;
                    top: 0px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 36px;
                    line-height: 49px;
                    /* identical to box height */

                    text-align: justify;
                    letter-spacing: 0.003em;

                    /* Secondary Color */

                    color: #8992FA;

                }
                .app{
                    position: absolute;
                    width: 62px;
                    height: 19px;
                    left: 24px;
                    top: 70px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 19px;
                    /* identical to box height */

                    text-align: justify;
                    letter-spacing: 0.003em;

                    /* Medium */

                    color: #969696;

                }

        .frame8{
            position: absolute;
            width: 122px;
            height: 76px;
            left: 373px;
            top: 1078px;
        }
                 .jml{
                    position: absolute;
                    width: 122px;
                    height: 49px;
                    left: 11px;
                    top: 0px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 700;
                    font-size: 36px;
                    line-height: 49px;
                    /* identical to box height */

                    text-align: justify;
                    letter-spacing: 0.003em;

                    /* Secondary Color */

                    color: #8992FA;

                }
                .destination{
                    position: absolute;
                    width: 62px;
                    height: 19px;
                    left: 24px;
                    top: 70px;

                    font-family: 'Open Sans';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 19px;
                    /* identical to box height */

                    text-align: justify;
                    letter-spacing: 0.003em;

                    /* Medium */

                    color: #969696;

                }

                .conten1{
                 position: absolute;
                width: 1440px;
                height: 574px;
                left: 0px;
                top: 1390px;
                }
                    .frame9{
                        position: absolute;
                        width: 446px;
                        height: 444px;
                        left: 150px;
                        top: 1464px;

                        background: #FFFFFF;
                        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                        border-radius: 21px;
                    }
                    .judul2{
                        position: absolute;
                        width: 327.72px;
                        height: 30.69px;
                        left: 26.31px;
                        top: 42.75px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 24px;
                        line-height: 33px;

                        /* Dark */

                        color: #0B0F18;
                    }
                    .subjudul7{
                        position: absolute;
                        width: 386px;
                        height: 76px;
                        left: 26px;
                        top: 127px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 13.7228px;
                        line-height: 26px;
                        /* or 188% */

                        text-align: justify;
                        letter-spacing: 0.003em;

                        /* Medium */

                        color: #969696;

                    }
                    .judul3{
                        position: absolute;
                        width: 274px;
                        height: 23px;
                        left: 26px;
                        top: 258px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 700;
                        font-size: 19.7291px;
                        line-height: 27px;

                        /* Dark */

                        color: #0B0F18;

                    }
                    .rectangle{
                        position: absolute;
                        width: 394px;
                        height: 10px;
                        left: 26px;
                        top: 299px;

                        background: #BFC4FF;
                        border-radius: 12px;
                    }
                    .rectangle1{
                        position: absolute;
                        width: 302px;
                        height: 10px;
                        left: 26px;
                        top: 299px;

                        /* Secondary Color */

                        background: #8992FA;
                        border-radius: 10.9606px;
                    }
                    .foto1{
                        box-sizing: border-box;

                        position: absolute;
                        width: 35px;
                        height: 35px;
                        left: 26px;
                        top: 367px;
                        border-radius: 20px;
                        background: url(.jpg), #C4C4C4;
                        border: 2.19212px solid #FFFFFF;
                    }
                    .foto2{
                        box-sizing: border-box;

                        position: absolute;
                        width: 35px;
                        height: 35px;
                        left: 43px;
                        top: 367px;
                        border-radius: 20px;
                        background: url(.jpg), #C4C4C4;
                        border: 2.19212px solid #FFFFFF;
                    }
                    .foto3{
                        /* box-sizing: border-box; */

                        position: absolute;
                        width: 35px;
                        height: 35px;
                        left: 61px;
                        top: 367px;
                        border-radius: 20px;
                        background: url(.jpg), #C4C4C4;
                        border: 2.19212px solid #FFFFFF;
                    }
                    .people{
                        position: absolute;
                        width: 82px;
                        height: 18px;
                        left: 112px;
                        top: 376px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 14px;
                        line-height: 19px;

                        /* Medium */

                        color: #969696;

                    }
                    .foto4{
                        position: absolute;
                        width: 8px;
                        height: 8px;
                        left: 324px;
                        top: 313px;
                        border-radius: 10px;
                        /* Secondary Color */

                        background: #8992FA;
                    }
                    .persen{
                        position: absolute;
                        width: 30px;
                        height: 14px;
                        left: 314px;
                        top: 325px;

                        font-family: 'Open Sans';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 14px;
                        line-height: 19px;

                        color: #000000;
                    }
            .frame10{
                position: absolute;
                width: 233px;
                height: 237px;
                left: 575px;
                top: 1433px;

                background: #FFFFFF;
                box-shadow: -15px 24px 10px rgba(0, 0, 0, 0.03);
                border-radius: 23px;

            }
            .frame11{
            position: absolute;
            width: 233px;
            height: 240.04px;
            left: -15px;
            top: 10px;

            }
            .frame12{
                position: absolute;
                width: 233px;
                height: 237px;
                left: 575px;
                top: 1693px;

                background: #FFFFFF;
                box-shadow: -15px 24px 10px rgba(0, 0, 0, 0.03);
                border-radius: 23px;
            }
            .grup{
                position: absolute;
                width: 170.4px;
                height: 170.4px;
                left: 31.3px;
                top: 13.91px;

            }
            .view{
                position: absolute;
                width: 103px;
                height: 18px;
                left: 71px;
                top: 203px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 22px;

                color: #000000;
            }

            .use{
                position: absolute;
                width: 257px;
                height: 25px;
                left: 844px;
                top: 1485px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                /* identical to box height */


                /* Tertiary Color */

                color: #FFD31D;

            }
            .use21{
                position: absolute;
                width: 298px;
                height: 98px;
                left: 844px;
                top: 1522px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 49px;

                /* Dark */

                color: #0B0F18;
               
            }
            .use2{
                position: absolute;
                width: 446px;
                height: 72px;
                left: 844px;
                top: 1644px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 24px;
                /* or 171% */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Medium */

                color: #969696;

            }
            .poin{
                position: absolute;
                width: 122px;
                height: 49px;
                left: 844px;
                top: 1756px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 49px;
                /* identical to box height */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Secondary Color */

                color: #8992FA;

            }
            .user1{
                position: absolute;
                width: 62px;
                height: 19px;
                left: 874px;
                top: 1813px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 19px;
                /* identical to box height */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Medium */

                color: #969696;

            }
            .poin1{
                position: absolute;
                width: 122px;
                height: 49px;
                left: 1006px;
                top: 1756px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 49px;
                /* identical to box height */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Secondary Color */

                color: #8992FA;
            }
            .user2{
                position: absolute;
                width: 76px;
                height: 19px;
                left: 1029px;
                top: 1813px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 19px;
                /* identical to box height */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Medium */

                color: #969696;
            }
            .poin2{
                position: absolute;
                width: 122px;
                height: 49px;
                left: 1166px;
                top: 1756px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 49px;
                /* identical to box height */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Secondary Color */

                color: #8992FA;

            }
            .user3{
                position: absolute;
                width: 76px;
                height: 19px;
                left: 1189px;
                top: 1813px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 19px;
                /* identical to box height */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Medium */

                color: #969696;
            }
            .frame13{
                position: absolute;
                width: 1440px;
                height: 370px;
                left: 0px;
                top: 1964px;

                background: #EFF0FF;
            }
            .use1{
                position: absolute;
                width: 257px;
                height: 21px;
                left: 592px;
                top: 2050px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 21px;
                /* identical to box height */


                /* Tertiary Color */

                color: #FFD31D;

            }
            .user4{
                position: absolute;
                width: 446px;
                height: 42px;
                left: 497px;
                top: 2087px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 42px;

                /* Dark */

                color: #0B0F18;
            }
            .user5{
                position: absolute;
                width: 608px;
                height: 24px;
                left: 451px;
                top: 2145px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 24px;
                /* identical to box height, or 171% */

                text-align: justify;
                letter-spacing: 0.003em;

                /* Medium */

                color: #969696;

            }
            .btn{
                position: absolute;
                width: 130px;
                height: 40px;
                left: 655px;
                top: 2209px;
            }
            .btn:hover{
                position: absolute;
                width: 130px;
                height: 40px;
                left: 655px;
                top: 2209px;
                background: blue;
            }
            .use3{
                position: absolute;
                width: 257px;
                height: 25px;
                left: 592px;
                top: 2434px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                /* identical to box height */


                /* Tertiary Color */

                color: #FFD31D;

            }
            .coment{
                position: absolute;
                width: 420px;
                height: 49px;
                left: 510px;
                top: 2471px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 49px;
                /* identical to box height */


                /* Dark */

                color: #0B0F18;
            }
            .foto8{
                position: absolute;
                width: 318px;
                height: 493px;
                left: 203px;
                top: 2600px;

                background: #FFFFFF;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 50px;
            }
            .foto9{
                position: absolute;
                width: 318px;
                height: 493px;
                left: 561px;
                top: 2600px;

                background: #FFFFFF;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 50px;
            }
            .foto10{
                position: absolute;
                width: 318px;
                height: 493px;
                left: 919px;
                top: 2600px;

                background: #FFFFFF;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 50px;
            }

            /* footer */

            .footer{
                position: absolute;
                width: 1440px;
                height: 338px;
                left: 0px;
                top: 3193px;

                background: #0B0F18;
            }
            .naik{
                position: absolute;
                width: 115px;
                height: 31px;
                left: 150px;
                top: 48px;

                font-family: 'K2D';
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 31px;

                /* Secondary Color */

                color: #8992FA;

            }

            .content2{
                position: absolute;
                width: 280px;
                height: 110px;
                left: 150px;
                top: 103px;

                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 13.7228px;
                line-height: 26px;
                /* or 188% */

                letter-spacing: 0.003em;

                /* Medium */

                color: #969696;

            }
            .copyr{
                position: absolute;
                width: 334px;
                height: 16px;
                left: 92px;
                top: 296px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 16px;
                text-align: center;
                letter-spacing: 0.08em;

                /* Medium */

                color: #D8D8D8;
            }
            .vector{
                position: absolute;
                width: 0px;
                height: 259.5px;
                left: 532px;
                top: 59.5px;

                /* Medium Dark */

                border: 1px solid #646464;

            }
            .about1{
                position: absolute;
                width: 44px;
                height: 14px;
                left: 572px;
                top: 64px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 14px;
                /* identical to box height, or 88% */

                letter-spacing: 0.003em;

                color: #FFFFFF;
            }

            .progres{
                position: absolute;
                width: 62px;
                height: 80px;
                left: 572px;
                top: 94px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 40px;
                /* or 286% */

                letter-spacing: 0.003em;

                /* Light Medium */

                color: #D8D8D8;
            }
            .comment1{
                position: absolute;
                width: 62px;
                height: 80px;
                left: 572px;
                top: 124px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 40px;
                /* or 286% */

                letter-spacing: 0.003em;

                /* Light Medium */

                color: #D8D8D8;
            }

            .destination1{
                position: absolute;
                width: 83px;
                height: 14px;
                left: 714px;
                top: 64px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 14px;
                /* identical to box height, or 88% */

                letter-spacing: 0.003em;

                color: #FFFFFF;

            }
            .waters{
                position: absolute;
                width: 58px;
                height: 80px;
                left: 714px;
                top: 94px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 40px;
                /* or 286% */

                letter-spacing: 0.003em;

                /* Light Medium */

                color: #D8D8D8;
            }
            .choose{
                position: absolute;
                width: 99px;
                height: 14px;
                left: 877px;
                top: 64px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 14px;
                /* identical to box height, or 88% */

                letter-spacing: 0.003em;

                color: #FFFFFF;

            }

            .economi{
                position: absolute;
                width: 62px;
                height: 120px;
                left: 877px;
                top: 94px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 40px;
                /* or 286% */

                letter-spacing: 0.003em;

                /* Light Medium */

                color: #D8D8D8;

            }
            .contactus{
                position: absolute;
                width: 80px;
                height: 14px;
                left: 1056px;
                top: 64px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 14px;
                /* identical to box height, or 88% */

                letter-spacing: 0.003em;

                color: #FFFFFF;

            }
            .contactus1{
                position: absolute;
                width: 87px;
                height: 120px;
                left: 1056px;
                top: 94px;

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 40px;
                /* or 286% */

                letter-spacing: 0.003em;

                /* Light Medium */

                color: #D8D8D8;
            }
            .fb{
                position: absolute;
                width: 24px;
                height: 24px;
                left: 1146px;
                top: 299px;

            }

            .twitter{
                position: absolute;
                width: 20px;
                height: 20px;
                left: 1188px;
                top: 301px;
            }
            .instagram{
                position: absolute;
                width: 18px;
                height: 18px;
                left: 1229px;
                top: 302px;
            }
            .youtube{
                position: absolute;
                width: 24px;
                height: 24px;
                left: 1266px;
                top: 299px;

            }

      

            .ellipse32{
                position: absolute;
                left: 1308px;
                top: 236px;



            }
    </style>

</head>
<body> 
    
    <section style="background: url('../../img/navbar.png'); background-size:cover; width:1440px; height:559px;">

    <div 
    style="background-image: linear-gradient(90deg, #000000 -46.92%, rgba(0, 0, 0, 0) 100%); width:1440px; height:559px; "> 
    <h2 style="font-size: 50px">Let's explore the <br> World with us</h2>
    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in purus 
        eget tellus aliquam egestas.</h4>
    
        {{-- <label  for="">Naik.kapal</label> --}}
        
        <ul>
                <li class="naikkapal"><a href=""> Naik.Kapal</a></li>
                <li class="home"><a href=""> Home</a></li>
                
                <li class="destinasi" ><a href=""> Destinacion</a></li>
                <li class="choose1" ><a href=""> Choose Class</a></li>
                <li class="manage" style=""> <a href=""> Manage</a></li>
                <li class="about" style=""> <a href=""> About Us</a></li>
                <li class="login"><a href="/"> Login</a></li>
                <button class="signup"><a href="/Registrasi"> signup </a></button>
              
            <button class="signup1" style= ><a href="/Registrasi">Signup</a></button>
                   
    </div>
</section>


        <p class="judul">JUST FOR THOSE WHO USE US</p>

        <label class="subjudul">Some advantages for You to Choose our flights</label>

        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Morbi pretium facilisis mollis. Donec nec auctor tortor.
             In varius ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>
             {{-- <div class="wicaksana"> --}}
                <img class="wicaksana" src="img/wicaksana.png" alt="">  
   
             {{-- </div> --}}
             <p class="nama">wicaksana.adi</p>
             <p class="propesi">UI/UX Designer</p>
       
       
        
        <div class="frame4">
            <label class="topi">⛑</label>
            <p class="subjudul1">Guaranteed Safety</p>
            <p class="subjudul2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis. </p>
        </div>
        <div class="frame5">
           <label class="pohon" for="">🏝</label> 
           <p class="subjudul3">Many Destination</p>
           <p class="subjudul4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis. </p>

       </div>
       <div class="frame6">
            <p class="coin">🎟</p>
            <p class="subjudul5">Easy transaction</p>
            <p class="subjudul6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis. </p>
       </div>

       <div class="frame7">
            <p class="user">+2,000</p>
            <p class="app">App user</p>
       </div>
       <div class="frame8">
        <p class="jml">+1,000</p>
        <p class="destination">Destination</p>
       </div>

     <div class="content1">
        <div class="frame9">
                <label class="judul2">Progress in our application</label>

                <p class="subjudul7">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     Morbi pretium facilisis mollis. Donec nec auctor tortor. 
                    In varius ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>
                <label class="judul3">Progress in our application</label>
                <img class="rectangle" src="img/Rectangle 48.png" alt="">
                <img class="rectangle1" src="img/Rectangle 49.png" alt="">
                <img class="foto1" src="img/foto3.png" alt="">
                <img class="foto2" src="img/foto2.png" alt="">
                <img class="foto3" src="img/foto1.png" alt="">
                <img class="foto4" src="img/Ellipse 8.png" alt="">

                <p class="people">+ 12 People</p>
                <p class="persen">85%</p>

        </div>

        <div class="frame10">
            <img class="frame11" src="img/frame 6.png" alt="">          
        </div>
        <div class="frame12" >
                <img class="grup" src="img/group 1790.png" alt="">
                <p class="view">People View</p>
        </div>
        <label class="use" for="">JUST FOR THOSE WHO USE US</label>
        <p class="use21">Progress in our Application</p>
        <p class="use2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Morbi pretium facilisis mollis. Donec nec auctor tortor. 
            In varius ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>

            <p class="poin">+2,000</p>
            <p class="user1">App user</p>

            <p class="poin1">+1,000</p>
            <p class="user2">Destination</p>
            

            <p class="poin2">+2,500</p>
            <p class="user3">Comment</p>

     </div>
     <div class="frame13"> </div>
            <label class="use1" for="">JUST FOR THOSE WHO USE US</label>
            <p class="user4">Progress in our Application</p>
            <p class="user5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pretium facilisis mollis.</p>
                {{-- <p class="sign">Signup</p> --}}
            <img class="btn" href ="login.blade.php" src="img/Button.png" alt="">

            <p class="use3">JUST FOR THOSE WHO USE US</p>
            <p class="coment">Comments on this App</p>
            <img class="foto8" src="img/frame 8.png" alt="">
            <img class="foto9" src="img/frame 9.png" alt="">
            <img class="foto10" src="img/frame 10.png" alt="">

            {{-- footer --}}

            <div class="footer">
                <p class="naik">Naik.kapal</p>
                <p class="content2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Morbi pretium facilisis mollis. Donec nec auctor tortor.
                     In varius ipsum sit amet elit congue, mattis bibendum nibh feugiat.</p>

                     <p class="copyr">©Naik.kapal All Rights Reserved</p>
                     <img class="vector" src="img/vector 2.png" alt="">

                     <label class="about1" for="">About</label>
                     <label class="progres">Progress</label>
                     <label class="comment1">Comment</label>

                     <label class="destination1" for="">Destination</label>
                     <label class="waters">Waters
                        Mainland</label>

                        <label class="choose" for="">Choose Class</label>
                        <label class="economi">Economy
                            Executive
                            VVIP</label>

                            <label class="contactus" for="">Contact Us</label>
                            <label class="contactus1" for="">Contact Us
                                Privacy Policy
                                Log in</label>

                                <label class="fb" for=""><img src="img/fb.png" alt=""></label>
                                <label class="twitter" for=""><img src="img/twitter.png" alt=""></label>
                                <label class="instagram" for=""><img src="img/instagram.png" alt=""></label>
                                <label class="youtube" for=""><img src="img/youtube.png" alt=""></label>

                                <img class="ellipse31" src="img/ellipse 31.png" alt="">
                                <img class="ellipse32" src="img/ellipse 32.png" alt="">


            </div>

</body>
</html>