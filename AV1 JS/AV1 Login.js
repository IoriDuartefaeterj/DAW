import { auth } from "./firebase-config.js";

import {
 signInWithEmailAndPassword
} from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

async function login(email, senha){

 await signInWithEmailAndPassword(
   auth,
   email,
   senha
 );

 location.href = "menu.html";
}
