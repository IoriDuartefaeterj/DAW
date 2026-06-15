import {
 doc,
 deleteDoc
}
from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-firestore.js";

await deleteDoc(
 doc(db,"perguntas",id)
);
