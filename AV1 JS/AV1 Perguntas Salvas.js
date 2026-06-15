import { db } from "./firebase-config.js";

import {
 collection,
 addDoc
}
from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-firestore.js";

async function salvarPergunta(dados){

 await addDoc(
   collection(db,"perguntas"),
   dados
 );

 alert("Pergunta salva!");
}
