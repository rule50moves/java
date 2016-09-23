package ru.stqa.pft.sandbox;

import java.awt.*;

public class MyFirstProgram {

    public static void main(String[] args) {

        Point p1 = new Point(2, 4);
        Point p2 = new Point(8, 6);

        System.out.println("Расстояние между точкой (" + p1.x + ", " + p1.y + ") и точкой (" + p2.x + ", " + p2.y + ") равно " + p1.distance(p2));


        Square s = new Square(5);
        System.out.println("Площадь квадрата со стороной " + s.l + " = " + s.area());

        Rectangle r = new Rectangle(4, 6);
        System.out.println("Площадь прямоугольника со сторонами " + r.a + " и " + r.b + " = " + r.area());

    }

}