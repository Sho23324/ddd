// logout.ts
"use client";

import { useRouter } from "next/navigation";

export function useLogout() {
  const router = useRouter();

  const handleLogout = async () => {
    const token = localStorage.getItem("token");

    try {
      await fetch("http://127.0.0.1:8000/api/logout", {
        method: "POST",
        headers: {
          Authorization: `Bearer ${token}`,
          Accept: "application/json",
        },
      });
    } catch (err) {
      console.error("Logout failed", err);
    } finally {
      localStorage.removeItem("token");
      router.push("/login");
    }
  };

  return handleLogout;
}
