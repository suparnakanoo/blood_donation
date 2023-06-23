import './App.css';
import PrimarySearchAppBar from './components/AppBar.js'
import SignInSide from './components/SignIn';

function App() {
  return (
    <div className="App">
      <PrimarySearchAppBar></PrimarySearchAppBar>
      <SignInSide></SignInSide>
    </div>
  );
}

export default App;
