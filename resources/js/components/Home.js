import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Glerks } from './Glerks';

export default class Home extends Component {
    render() {
        return (
            <div className="container">
                <div className="w-1/3 mx-auto mt-10">
                    <div className="bg-grey-dark text-red w-full p-10">home componenet</div>

                    <div className="bg-red text-grey-dark p-10">
                        <Glerks />
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('home')) {
    const element = document.getElementById('home');;
    const props = Object.assign({}, element.dataset);
    ReactDOM.render(<Home {...props} />, element);
}
