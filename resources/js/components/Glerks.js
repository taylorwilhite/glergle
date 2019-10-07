import React from 'react';

export const Glerks = ({glerks}) => {
  return (
    <div className="glerkContainer">
      {glerks.map(glerk => {
        <div className="glerk-item">
          <p>{glerk.content}</p>
        </div>
      })}
    </div>
  )
}