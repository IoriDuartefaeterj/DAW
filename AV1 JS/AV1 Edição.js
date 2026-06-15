import {
 doc,
 updateDoc
}
from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-firestore.js";

await updateDoc(
 doc(db,"perguntas",id),
 {
   pergunta:novaPergunta
 }
);
