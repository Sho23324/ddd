"use client";

import { useEffect, useState } from "react";
import Link from "next/link";

type Hotel = {
  id: number;
  name: string;
  location: string;
};

export default function Hotels() {
  const [hotels, setHotels] = useState<Hotel[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState("");

  useEffect(() => {
    const fetchData = async () => {
      try {
        const token = localStorage.getItem("token");
        const res = await fetch("http://127.0.0.1:8000/api/hotels", {
          headers: {
            Authorization: `Bearer ${token}`,
            Accept: "application/json",
          },
          cache: "no-store",
        });

        if (!res.ok) {
          throw new Error("Unauthorized or failed request");
        }

        const data = await res.json();
        setHotels(data.data);
      } catch (err: any) {
        setError(err.message);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  if (loading) return <p className="text-center mt-4">Loading hotels...</p>;
  if (error) return <p className="text-red-500 text-center mt-4">{error}</p>;

  return (
    <div>
      {hotels.map((hotel) => (
        <Link href={`hotels/${hotel.id}`} key={hotel.id}>
          <div className="border-[1px] w-[250px] flex flex-col my-4 mx-auto p-4 items-center rounded-2xl">
            <p className="text-[16px] font-bold font-serif">{hotel.name}</p>
            <p>{hotel.location}</p>
          </div>
        </Link>
      ))}
    </div>
  );
}
