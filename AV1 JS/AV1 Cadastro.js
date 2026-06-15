import { auth } from "./firebase-config.js";

import {
 createUserWithEmailAndPassword
} from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

async function cadastrar(email, senha){

 await createUserWithEmailAndPassword(
   auth,
   email,
   senha
 );

 alert("Cadastro realizado!");
}
