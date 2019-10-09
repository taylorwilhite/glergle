import React, {useState, useEffect} from 'react';
import axios from 'axios';

export const Glerks = ({user}) => {
  const [glerks, setGlerks] = useState([]);
  const loadGlerks = () => {
    axios.get('/glerks')
      .then(res => {
        console.log(res);
        console.log(res.data);
        setGlerks(res.data);
      })
  }
  useEffect(() => {
    loadGlerks()
  }, []);
  return (
    <div className="glerkContainer">
      <button onClick={loadGlerks}>load</button>
      {glerks.map(glerk =>
        <div className="glerk-item">
          <p>{`${glerk.content}`}</p>
        </div>
      )}
    </div>
  )
}