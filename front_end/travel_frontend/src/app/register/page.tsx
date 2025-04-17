"use client";

import { useEffect, useState, FormEvent } from "react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import {
  Select,
  SelectContent,
  SelectGroup,
  SelectItem,
  SelectLabel,
  SelectTrigger,
  SelectValue,
} from "@/components/ui/select";

export default function Register() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    password: "",
    role: "",
  });
  const [errors, setErrors] = useState<{ [key: string]: string[] }>({});
  const [loading, setLoading] = useState(false);
  const [roles, setRoles] = useState<{ id: number; name: string }[]>([]);

  useEffect(() => {
    fetch("http://127.0.0.1:8000/api/roles")
      .then((res) => res.json())
      .then((data) => {
        setRoles(data);
        setFormData((prev) => ({
          ...prev,
          role: data[0]?.name || "", // set default selected role
        }));
      });
  }, []);

  // Handle input changes
  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const { name, value } = e.target;
    setFormData((prev) => ({ ...prev, [name]: value }));
  };

  // Handle form submission
  async function onSubmit(event: FormEvent<HTMLFormElement>) {
    event.preventDefault();
    setLoading(true);
    setErrors({});

    const response = await fetch("http://127.0.0.1:8000/api/register", {
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
      console.error("Registration failed:", result?.message || result);
    } else {
      alert("User registered successfully!");
      localStorage.setItem("token", result.token);
      window.location.href = "/hotels";
      setFormData({
        name: "",
        email: "",
        password: "",
        role: roles[0]?.name || "", // reset role to default
      });
    }

    setLoading(false);
  }

  return (
    <div className="w-[500px] my-4 mx-auto bg-gray-100 p-6 shadow-2xl rounded-xl">
      <form onSubmit={onSubmit} className="grid gap-4">
        <legend className="text-xl font-semibold">Register Form</legend>

        {/* Name Field */}
        <Input
          type="text"
          placeholder="Name"
          name="name"
          value={formData.name}
          onChange={handleChange}
        />
        {errors.name && <p className="text-red-500">{errors.name[0]}</p>}

        {/* Email Field */}
        <Input
          type="email"
          placeholder="Email"
          name="email"
          value={formData.email}
          onChange={handleChange}
        />
        {errors.email && <p className="text-red-500">{errors.email[0]}</p>}

        {/* Password Field */}
        <Input
          type="password"
          placeholder="Password"
          name="password"
          value={formData.password}
          onChange={handleChange}
        />
        {errors.password && (
          <p className="text-red-500">{errors.password[0]}</p>
        )}

        {/* Dynamic Role Select */}
        <Select
          value={formData.role}
          onValueChange={(value) =>
            setFormData((prev) => ({ ...prev, role: value }))
          }
        >
          <SelectTrigger>
            <SelectValue placeholder="Select Role" />
          </SelectTrigger>
          <SelectContent>
            <SelectGroup>
              <SelectLabel>Roles</SelectLabel>
              {roles.map((role) => (
                <SelectItem key={role.id} value={role.name}>
                  {role.name}
                </SelectItem>
              ))}
            </SelectGroup>
          </SelectContent>
        </Select>
        {errors.role && <p className="text-red-500">{errors.role[0]}</p>}

        <Button className="bg-green-500 mt-2" type="submit" disabled={loading}>
          {loading ? "Registering..." : "Register"}
        </Button>
      </form>
    </div>
  );
}
