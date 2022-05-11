import React ,{Component} from 'react';
import ReactDOM from 'react-dom';

class Example extends Component{
    render(){
        return (
            <div className="container">
                <h1>hello world</h1>
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>
    
                            <div className="card-body">I'm an example component!</div>
                        </div>
                    </div>
              php  </div>
            </div>
        );
    }
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
