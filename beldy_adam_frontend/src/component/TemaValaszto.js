import { useContext } from "react";
import { ApiContext } from "../context/ApiContext";

export default function TemaValaszto(){
    const { temak, valasztottTema, setValasztottTema } = useContext(ApiContext);

    return(
        <select onChange={(e) => setValasztottTema(e.target.value)} value={valasztottTema}>
            <option value="">Válassz témát</option>
            {temak.map((tema) => (
                <option key={tema.id} value={tema.id}>
                    {tema.temanev}
                </option>
            ))}
            </select>
    )
}