/// <reference path="../../../typings/tsd.d.ts" />



class Student {
    fullName: string;
    constructor(public firstName, public middleInitial, public lastName) {
        this.fullName = firstName + " " + middleInitial + " " + lastName;
    }
}

interface Person {
    firstName: string;
    lastName: string;
}

function greeter(person : Person) {
    return "Hello, " + person.firstName + " " + person.lastName;
}

var user = new Student("Jane", "M.", "User");

interface HelloWorldProps {
    name: string;
}

var HelloMessage = React.createClass<HelloWorldProps, any>({
    render: function() {
        return <div>Hello {this.props.name}</div>;
    }
});

$(document).ready(function () {

	//document.getElementById("title").innerHTML = greeter(user);
	
	ReactDOM.render(<HelloMessage name="helloooo" />, document.getElementById('title'));

});