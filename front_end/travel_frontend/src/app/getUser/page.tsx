"use client";
import { useRouter } from "next/navigation";

export default function GetUser() {
  const token = localStorage.getItem("token");
  const router = useRouter();
  fetch("http://127.0.0.1:8000/api/getUser", {
    headers: {
      Authorizatin: `Bearer ${token}`,
      Accept: "application/json",
    },
  })
    .then((res) => {
      if (!res.ok) throw new Error("unauthorized");
      return res.json();
    })
    .then((data) => {
      console.log("User is authenticated:", data.user);
      router.push("/getUser");
    })
    .catch((err) => {
      console.error("User is not authenticated", err);
      router.push("/login");
    });

  return <h1 className="text-4xl">Get user</h1>;
}
