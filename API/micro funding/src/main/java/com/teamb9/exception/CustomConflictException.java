package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomConflictException extends SentienceImsException {

	private String code;

	public CustomConflictException() {
		super();
	}

	public CustomConflictException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomConflictException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
