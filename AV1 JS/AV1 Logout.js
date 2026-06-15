import { auth } from "./firebase-config.js";

import {
 signOut
} from
"https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

signOut(auth);
