import { createContext, useEffect, useState } from "react";
import api from "../api/api";

export const ApiContext = createContext();

export const ApiProvider = ({ children }) => {
    const [temak, setTemak] = useState([]);
    const [szavak, setSzavak] = useState([]);
    const [valasztottTema, setValasztottTema] = useState("");
    const [aktivTema, setAktivTema] = useState(null);

    useEffect(() => {
        api.get("/tema").then(res => setTemak(res.data));
        api.get("/szavak").then(res => setSzavak(res.data));
    },[]);

    const getAdat = async(vegpont, setFgv) => {
        try{
            const res = await api.get(vegpont);
            setFgv([...res.data]);
        }catch(err) {
            console.error("Hiba az adatok lekérésekor:", err);
        }
    }

    return(
        <ApiContext.Provider value={{ temak, szavak, valasztottTema, setValasztottTema, aktivTema, setAktivTema, getAdat }}>
            {children}
        </ApiContext.Provider>
    );
};