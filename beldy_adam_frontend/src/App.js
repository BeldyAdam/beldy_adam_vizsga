import './App.css';
import SzavakTablazat from './component/SzavakTablazat';
import TemaValaszto from './component/TemaValaszto';
import { ApiProvider } from './context/ApiContext';

function App() {
  return (
    <ApiProvider > 
      <TemaValaszto />
      <SzavakTablazat />  
    </ApiProvider>
  );
}

export default App;
