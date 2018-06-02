package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomInternalServerException extends Exception {

	private String code;

	public CustomInternalServerException() {
		super();
	}

	public CustomInternalServerException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomInternalServerException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
