package com.company;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class BooleanVariable {
    public static void main(String[] args) throws IOException {
        BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));

        String input = reader.readLine();

        Boolean result = Boolean.valueOf(input);

        if (result) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}
