"use client";
import { useRouter } from "next/navigation";
import React, { useEffect, useState } from "react";

export default function AuthProtectedWrapp({
  children,
}: {
  children: React.ReactNode;
}) {
  const router = useRouter();
  const [isAuthenticated, setIsAuthenticated] = useState<boolean | null>(null);

  useEffect(() => {
    const token = localStorage.getItem("token");

    if (!token) {
      router.push(
        `/login?redirect=${encodeURIComponent(window.location.pathname)}`
      );
      return;
    }

    const verifyUser = async () => {
      try {
        const res = await fetch("http://127.0.0.1:8000/api/getUser", {
          headers: {
            Authorization: `Bearer ${token}`,
            Accept: "application/json",
          },
        });

        if (!res.ok) throw new Error("Unauthorized");

        const data = await res.json();

        setIsAuthenticated(true);
      } catch (err) {
        localStorage.removeItem("token");
        router.push(
          `/login?redirect=${encodeURIComponent(window.location.pathname)}`
        );
      }
    };

    verifyUser();
  }, [router]);

  if (isAuthenticated === null) {
    return <p className="text-center mt-10">Checking Authentication...</p>;
  }

  return <>{children}</>;
}
