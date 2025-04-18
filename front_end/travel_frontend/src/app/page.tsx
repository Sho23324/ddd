import Link from "next/link";
import Hotels from "./hotels/page";

import AuthProtectedWrapp from "./AuthProtectedWrapp";
import About from "./about/page";

export default async function Home() {
  return (
    // <div>
    //   <AuthProtectedWrapp>{/* <Hotels /> */}</AuthProtectedWrapp>
    // </div>

    <div>
      <h1>Hello HOme</h1>
    </div>
  );
}
