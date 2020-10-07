html, body {
width:100%;
height:100%;
margin: 0;
}

#body{
background-color: beige;
font-family: 'Raleway', sans-serif;
}

p {
font-size: 1.5em;
text-align: justify;
line-height: 200%;
}

/* Navigation bar css */
#menu-burger a {
text-decoration: none;
color: white;
}

nav ul {
display: flex;
list-style: none;
justify-content: space-around;
margin: 0;
}
nav {
background-color: black;
height: 90px;
}

li {
padding-top: 31px;
font-size: 1.5em;
font-weight: bold;
}

#menu-burger a:hover {
color: #C5404D;
}
.burger-menu {
cursor: pointer;
font-size: 26px;
margin: 10px;
}
.display-block {
display: block;
}

/* Video Alric */

#videoChezAlriq{
width: 80%;
margin-left: 10%;
}

/* Programmation Section CSS */

#programmation {
width:80%;
height:auto;
margin:0 auto;
}
.event {
align-content: center;
}
.eventDescription {
display: none;
align-content: center;
text-align: justify;
}

.eventText {
width:15em;
text-align:justify;
font-size:20px;
}

.eventClick {
height: 3em;
width: 3em;
}

.dateEvent {
font-weight: bold;
text-align:center;
}

.eventPhoto {
height: 10em;
width: 10em;
}

.eventTitle {
font-size:1.5em;
text-align: center;
}

.firstColumn, .secondColumn {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
text-align: center;
}
.price {
text-align:center;
}


/* End Programmation Section*/
h2 {
text-align: center;
font-size: 3rem;
margin-top: 6%;
margin-bottom: 1%;
}

.borderTop {
margin-bottom: 6%;
width: 30%;
margin-left: 39%;
border-top: solid black 6px;
}

#landingPicture {
width: 100%;
height: auto;
text-align: center;
}

#contactSticky{
position: sticky;
top : 2%;
}

/* Programmation Section CSS */

h1 {
color: white;
font-weight: bolder;
font-size: 5em;
}

#mainPageLogo {
text-align: center;
}

#mainLogo {
margin-left: 1600px;
transition: 2.4s;
transition-timing-function: cubic-bezier(.85,1.1,.7,-0.56);
}

#delay:hover {
font-size: 36px;
}

#imageRestauration {
width: 80%;
margin-left: 10%;
}



.date {
font-weight: bold;
margin-top:4%;
}

#notreHistoire {
margin-left: 5%;
margin-right: 5%;
text-align: justify;
}
/* Restauration section */

h3 {
text-align: center;
font-size: 2.8rem;
margin-top: 6%;
}
.restaurationtextetitre2 {
margin-left: 22%;
margin-right: 20%;
text-align: center;
}

.restaurationtextetitre {
margin-left: 30%;
margin-right: 30%;
text-align: center;
}

.restaurationtexte {
margin-left: 6%;
margin-right: 6%;
text-align: center;
}

.container {
display: flex;
justify-content : center;
flex-wrap: wrap;
}

.container2 {
display: flex;
justify-content: center;
align-items: center;
flex-wrap: wrap;
align-self: baseline;
}

.container3 {
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
}

.grayscale img {
-webkit-filter: grayscale(100%);
filter: grayscale(100%);
-webkit-transition: .3s ease-in-out;
transition: .3s ease-in-out;
}
.grayscale:hover img {
-webkit-filter: grayscale(0);
filter: grayscale(0);
transform:scale(3.1);
}

.morph img {
width: 250px;
height: 250px;
-webkit-filter: grayscale(0) blur(0px);
filter: grayscale(0) blur(0px);
-webkit-transition: all 0.5s ease;
transition: all 0.5s ease;
}

.morph:hover img {
width: 250px;
height: 250px;
border-radius: 80%;
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}

.tftable {
font-size:20px;
color:beige;
font-family: "varela round",sans serif;
width:40%;
border-width: 1px;
border-color: #c5404D;
/*border-collapse: collapse;*/
border-radius: 16px;

}

.tftable th {
font-size:20px;
color:beige;
background-color: #c5404D;
border-width: 1px;
padding: 8px;
border-style: solid;
border-color: #c5404D;
text-align:left;
border-radius: 16px;


}


.tftable tr {
color:black;
background-color: beige;
border-radius: 16px;


}


.tftable td {
font-size:20px;
border-width: 1px;
padding: 8px;
border-style: solid;
border-color: #c5404D;
border-radius: 16px;


}

.tftable tr:hover {
background-color:#ffffff;
}


/* Contact section */

#formulaire {
margin-bottom: 10%;
}

.contactMainSentences {
text-align: center;
}

#demandeInformations {
width: 90%;
padding:1.3%;
font-size: 2em;
display: inline-block;
background-color: #C5404D;
color: beige;
border: 1px solid black;
border-radius: 8px;
transition: width 1s;
}

#reservations {
padding: 1.3%;
width: 75%;
font-size: 2em;
color: #C5404D;
background-color: lightgrey;
border: 1px solid black;
border-radius: 8px;
transition: width 1s;
}
form {
--cb-contact: white;
--cb-contact--invalid: #d26c76;
}

form input{
background-color: var(--cb-contact);
transition: background-color 500ms;
}

form input[type=text] {
font-size: 130%;
}

form input[type=email] {
font-size: 130%;
}

form input[type=tel] {
font-size: 130%;
}

form input:not(:focus):invalid{
background-color: var(--cb-contact--invalid);
}

form input:focus {
border: 2px solid var(--cb-contact--invalid);
}

form input::placeholder {
color: #ffffff69;
}

form textarea{
background-color: var(--cb-contact);
transition: background-color 500ms;
}

form textarea:not(:focus):invalid{
background-color: var(--cb-contact--invalid);
}

form textarea:focus {
border: 2px solid var(--cb-contact--invalid);
}

form textarea::placeholder {
color: #ffffff69;
}

.contactItems {
margin-bottom: 1.1em;
}

#firstName {
margin-top: 2em;
}

input, textarea, button {
width: 24%;
height: 2.7em;
border-radius: 8px;
}

input{
width: 40%;

}


textarea {
background-color: $cd-txt;
width: 75%;
height: 10%;
font-size: 130%;
}

.contactTitles {
font-size: 1.5em;
}

::-webkit-input-placeholder { /* WebKit, Blink, Edge */
font-size: 1.7em;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
font-size: 1.7em;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
font-size: 1.7em;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
font-size: 1.7em;
}

button {
width: inherit;
font-size: 2rem;
color: beige;
margin-top: 2em;
background-color: #C5404D;
}

@keyframes shake {
0% { transform: translate(1px, 1px) rotate(0deg); }
10% { transform: translate(-1px, -2px) rotate(-1deg); }
20% { transform: translate(-3px, 0px) rotate(1deg); }
30% { transform: translate(3px, 2px) rotate(0deg); }
40% { transform: translate(1px, -1px) rotate(1deg); }
50% { transform: translate(-1px, 2px) rotate(-1deg); }
60% { transform: translate(-3px, 1px) rotate(0deg); }
70% { transform: translate(3px, 1px) rotate(-1deg); }
80% { transform: translate(-1px, -1px) rotate(1deg); }
90% { transform: translate(1px, 2px) rotate(0deg); }
100% { transform: translate(1px, -2px) rotate(-1deg); }
}


#gMaps {
text-align: center;
margin-top: 9%;
}


/* End of contact section */

footer {
background-color: #C5404D;
padding: 2%;
padding: 0.4%;
}

.footerMenu {
text-decoration: none;
color: beige;
font-weight: bold;
}


.footerItemsNames {
display: flex;
justify-content: space-around;
margin: 0.8%;
}

.footerItemsIcons {
display: flex;
justify-content: space-around;
margin-top: 0.5%;
padding: 0.5%;
border: solid white;
border-radius: 40px;
}

#iconsContainer {
text-align: center;
}

.icon {
width: 17%;
height: auto;
display: inline-block;
}
#histoirePicture{
width: 50%;
margin-left: 25%;
}
/* TEST COMPTEUR */
#compteur {
background-color: black;
position: fixed;
top: 565px;
right: 1px;
width: 12%;
border: 3px solid black;
border-radius: 20px;
font-size: 20px;
margin-left: 10px;
padding: 5px 11px 7px 13px;
color: #C5404D;
font-family: 'Roboto', sans-serif;
}
/* FIN DE TEST COMPTEUR */

@media screen and (max-width: 600px) {
nav {
display: none;
height: 170px;
}
ul {
flex-direction: column;
text-align: center;
}
li {
padding-top: 16px;
}
.burger-menu {
cursor: pointer;
font-size: 26px;
margin: 10px;
}
#menu-burger {
height: 200px;
}
form {
margin-left: 0;
}
input {
width: 70%;
}
textarea{
width: 70%;
}
button {
padding: 0 20%;
}

#histoire {
text-align: center;
background-size: cover;
overflow: hidden;
background-image: url('https://i0.wp.com/www.visiter-bordeaux.eu/wp-content/uploads/2019/06/11254157_833642916718059_3292309153825878100_n.jpg?fit=960%2C640&ssl=1');
width: 100%;
height: 50%;
}

#histoirePicture {
display: none;
}

.smallFooter {
display: inline-block;
}

.footerMenu {
font-size: 1.1em;
}
h1 {
display: none;
}
#mainLogo {
margin: 0;
transition: 0s;
position: static;
}
#gMaps iframe {
height: 200px;
}
.contactSubject {
margin:0;
}
#histoirePicture {
width: 80%;
}
p {
font-size: 1.3em;
text-align: justify;
line-height: 180%;
}
.restaurationtexte {
margin-left: 10%;
margin-right: 10%;
}
.grayscale:hover img {
-webkit-filter: grayscale(0);
filter: grayscale(0);
transform:scale(1.3);
}
#compteur {
background-color: black;
position: fixed;
top: 700px;
right: 0px;
width: 100%;
height: 45px;
border: 0px solid black;
border-radius: 0px;
font-size: 24px;
margin-left: 10px;
padding: 12px 11px 7px 13px;
text-align: center;
color: #C5404D;
font-family: 'Roboto', sans-serif;
}
footer {
margin-bottom: 55px;
}
}
@media screen and (min-width: 601px){
.burger-menu {
display: none;
}
.contactSubject {
margin-left: 17%;
}

.flex {
display: flex;
flex-direction: row;
}

form {
margin-left: 17%;
margin-top: 4%;
}

button {
padding: 0 6em;
}
.footerMenu {
font-size: 1.6em;
}

.smallFooter {
display: contents;
}
}
/* End navigation bar */