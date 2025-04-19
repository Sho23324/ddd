"use client";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";

import Link from "next/link";
import { useRouter, useSearchParams } from "next/navigation";
import React, { FormEvent, useState } from "react";

export default function Login() {
  const [formData, setFormData] = useState({
    email: "",
    password: "",
  });
  const [errors, setErrors] = useState<{ [key: string]: string[] }>({});
  const [loading, setLoading] = useState(false);

  const router = useRouter();
  const searchParams = useSearchParams();
  const redirectTo = searchParams.get("redirect") || "/dashboard";

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const { name, value } = e.target;
    setFormData((prev) => ({ ...prev, [name]: value }));
  };

  const onSubmit = async (e: FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setLoading(true);
    setErrors({});

    const response = await fetch("http://127.0.0.1:8000/api/login", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      body: JSON.stringify(formData),
    });

    const result = await response.json();

    if (!response.ok) {
      setErrors(result.errors || {});
    } else {
      localStorage.setItem("token", result.token);
      router.push(redirectTo);
    }

    setLoading(false);
  };

  return (
    <div className="w-[500px] my-4 mx-auto bg-gray-100 p-6 shadow-2xl rounded-xl">
      <form onSubmit={onSubmit} className="grid gap-4">
        <legend className="text-xl font-semibold">Login</legend>

        <Input
          type="email"
          name="email"
          placeholder="Email"
          value={formData.email}
          onChange={handleChange}
        />
        {errors.email && <p className="text-red-500">{errors.email[0]}</p>}

        <Input
          type="password"
          name="password"
          placeholder="Password"
          value={formData.password}
          onChange={handleChange}
        />
        {errors.password && (
          <p className="text-red-500">{errors.password[0]}</p>
        )}

        <Link href={"/register"}>
          <p className="text-blue-500 text-center">
            You don't have an account? Register
          </p>
        </Link>

        <Button className="bg-green-500 mt-2" type="submit" disabled={loading}>
          {loading ? "Logging in..." : "Login"}
        </Button>
      </form>
    </div>
  );
}
