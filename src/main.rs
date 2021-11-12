use glergle::scanner::Scanner;
use std::env;
use std::fs;
use std::io::{stdin, stdout, Write};

fn main() {
    let args: Vec<String> = env::args().collect();
    match args.len() {
        1 => {
            run_prompt();
        }
        2 => {
            run_file(&args[1]);
        }
        _ => {
            println!("Usage: glergle [script]");
            std::process::exit(64);
        }
    }
}

fn run_file(path: &str) {
    let contents = fs::read_to_string(path).expect("Failed to read file");
    run(contents);
}

fn run_prompt() {
    loop {
        print!("> ");
        let _ = stdout().flush();
        let mut line = String::new();
        stdin().read_line(&mut line).expect("Failed to read input");
        run(line);
    }
}

fn run(source: String) {
    let scanner = Scanner::new(source);
    println!("{}", scanner.source);
}
