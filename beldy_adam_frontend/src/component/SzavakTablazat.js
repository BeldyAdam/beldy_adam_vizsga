import React, { useContext } from 'react'
import { ApiContext } from '../context/ApiContext';
import SzavakSor from './SzavakSor';

function SzavakTablazat() {
  const { szavak, valasztottTema } = useContext(ApiContext);
  const szurt = valasztottTema
    ? szavak.filter((sz) => sz.temaId === valasztottTema)
    : szavak;
  return (
    <div className="szavak-tablazat">
      <table>
        <thead>
          <tr>
            <th>Angol</th>
            <th>Magyar</th>
            <th>Ellenörzés</th>
          </tr>
        </thead>
        <tbody>
          {szurt.map((szavak) => (
            <SzavakSor key={szavak.id} angol={szavak.angol} />
          ))}
        </tbody>
        </table>
    </div>
  )
}

export default SzavakTablazat
