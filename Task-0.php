<?php
class ValidParentheses {
    public function isValid($s) {
        
        $leftSymbols = new SplStack();
        
        foreach (str_split($s) as $c) {
            
            if ($c == '(' || $c == '{' || $c == '[') {
                $leftSymbols->push($c);
            }
            
            else if ($c == ')' && !$leftSymbols->isEmpty() && $leftSymbols->top() == '(') {
                $leftSymbols->pop();
            } else if ($c == '}' && !$leftSymbols->isEmpty() && $leftSymbols->top() == '{') {
                $leftSymbols->pop();
            } else if ($c == ']' && !$leftSymbols->isEmpty() && $leftSymbols->top() == '[') {
                $leftSymbols->pop();
            }
            
            else {
                return false;
            }
        }
        return $leftSymbols->isEmpty();
    }
}

