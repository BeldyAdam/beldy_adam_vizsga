import { useContext, useState } from "react";
import { ApiContext } from "../context/ApiContext";

export default function SzavakSor(szavak) {
    const { setAktivTema } = useContext(ApiContext);
    const [magyarSzo, setMagyarSzo] = useState("");

    const handleChange = (e) => {
        setMagyarSzo(e.target.value);
    };

    const helyes = szavak.magyar && magyarSzo.trim().toLowerCase() === szavak.magyar.trim().toLowerCase();

    return (
        <tr onClick={() => setAktivTema(szavak)}>
            <td>{szavak.angol}</td>
            <td>
                <input
                    className="magyarSzo"
                    type="text"
                    placeholder="Magyar jelentése"
                    value={magyarSzo}
                    onChange={handleChange}
                />
            </td>
            <td>
                <p>{magyarSzo ? (helyes ? "✔" : "❌") : ""}</p>
            </td>
        </tr>
    );
}

