import { db } from "./firebase-config.js";

import {
 collection,
 getDocs
}
from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-firestore.js";

const querySnapshot =
await getDocs(collection(db,"perguntas"));

querySnapshot.forEach(doc => {

 console.log(doc.id, doc.data());

});
