let a;
let b;
let c;
function triangle(a, b, c) {
    if (a == b && a == c) {
        return "It is equilateral triangle";
    }
    else if (a == b || a == c) {
        return "It is isosceles triangle";
    }
    else {
        return "It is scaleln triangle";
    }
}
console.log(triangle(29, 29, 30));