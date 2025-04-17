"use client";

import { useEffect, useState } from "react";
import { useParams } from "next/navigation";

type Hotel = {
  id: number;
  name: string;
  description: string;
  location: string;
};

export default function HotelDetails() {
  const { details } = useParams();
  const [hotel, setHotel] = useState<Hotel | null>(null);
  const [error, setError] = useState("");
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchHotel = async () => {
      try {
        const token = localStorage.getItem("token");
        const res = await fetch(`http://127.0.0.1:8000/api/hotels/${details}`, {
          headers: {
            Authorization: `Bearer ${token}`,
            Accept: "application/json",
          },
        });

        if (!res.ok) {
          throw new Error("Failed to fetch hotel details");
        }

        const data = await res.json();
        setHotel(data.data);
      } catch (err: any) {
        setError(err.message);
      } finally {
        setLoading(false);
      }
    };

    fetchHotel();
  }, [details]);

  if (loading) return <p className="text-center mt-4">Loading details...</p>;
  if (error) return <p className="text-red-500 text-center">{error}</p>;

  if (!hotel) return <p className="text-center mt-4">Hotel not found</p>;

  return (
    <div className="border-[1px] flex flex-col w-[250px] my-4 mx-auto p-4 gap-2 rounded-xl bg-gray-50 shadow-md">
      <p className="text-xl font-bold">{hotel.name}</p>
      <p>{hotel.description}</p>
      <p className="text-gray-500 italic">{hotel.location}</p>
    </div>
  );
}
