"use client";

import "../../globals.css";
import Link from "next/link";
import { useEffect, useState } from "react";
import { useRouter } from "next/navigation";

export default function NavBar() {
  const [user, setUser] = useState<{ name: string } | null>(null);
  const router = useRouter();

  // Function to fetch current user from backend
  const fetchUser = async () => {
    const token = localStorage.getItem("token");
    if (!token) return setUser(null);

    try {
      const res = await fetch("http://127.0.0.1:8000/api/getUser", {
        headers: {
          Authorization: `Bearer ${token}`,
          Accept: "application/json",
        },
      });

      if (!res.ok) throw new Error("Unauthorized");
      const data = await res.json();
      setUser(data.user);
    } catch {
      localStorage.removeItem("token");
      setUser(null);
    }
  };

  // Fetch user on mount
  useEffect(() => {
    fetchUser();

    // Watch for token changes in the same or other tabs
    const handleStorage = () => {
      fetchUser();
    };

    window.addEventListener("storage", handleStorage);
    return () => window.removeEventListener("storage", handleStorage);
  }, []);

  // Manual logout
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
      setUser(null);
      router.push("/login");
    }
  };

  return (
    <div className="bg-green-400 flex justify-between p-4">
      <div></div>
      <div className="flex gap-4 items-center">
        <Link href="/" className="text-2xl font-serif text-white">
          Home
        </Link>
        <Link href="/about" className="text-2xl font-serif text-white">
          About
        </Link>
        <Link href="/pages" className="text-2xl font-serif text-white">
          Pages
        </Link>

        {user ? (
          <div className="flex items-center gap-3">
            <Link
              href="/profile"
              className="flex items-center gap-2 border-2 border-white rounded-full px-3 py-1 text-white hover:bg-white hover:text-black"
            >
              <div className="w-8 h-8 bg-white text-black rounded-full flex items-center justify-center font-bold">
                {user.name[0]}
              </div>
              <span className="hidden sm:block">{user.name}</span>
            </Link>
            <button
              onClick={handleLogout}
              className="text-white border-2 border-white rounded-2xl px-4 py-1 hover:bg-white hover:text-black"
            >
              Logout
            </button>
          </div>
        ) : (
          <Link
            href="/login"
            className="border-[2px] border-white rounded-2xl p-2 text-white hover:bg-white hover:text-black"
          >
            Create account
          </Link>
        )}
      </div>
    </div>
  );
}
